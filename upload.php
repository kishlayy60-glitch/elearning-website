<?php
// upload.php
session_start();

// --- include DB connection (supports users.php or db.php) ---
$included = false;
if (file_exists(__DIR__ . '/users.php')) {
    require __DIR__ . '/users.php';
    $included = true;
} elseif (file_exists(__DIR__ . '/db.php')) {
    require __DIR__ . '/db.php';
    $included = true;
}

if (!$included || !isset($conn) || !($conn instanceof mysqli)) {
    http_response_code(500);
    die("Database connection not found. Create 'users.php' or 'db.php' that sets \$conn (mysqli).");
}

// --- ensure user logged in ---
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
$userId = (int)$_SESSION['user_id'];

// --- helper: check existing columns in upload_requests ---
function get_table_columns(mysqli $conn, string $table) {
    $cols = [];
    $res = $conn->query("SHOW COLUMNS FROM `{$table}`");
    if ($res) {
        while ($row = $res->fetch_assoc()) $cols[] = $row['Field'];
    }
    return $cols;
}
$uploadReqCols = get_table_columns($conn, 'upload_requests');

// --- check approval: allow upload only if user has at least one approved request in past
$approvedAllowed = false;
$check = $conn->prepare("SELECT status FROM upload_requests WHERE user_id = ? ORDER BY id DESC LIMIT 1");
if ($check) {
    $check->bind_param("i", $userId);
    $check->execute();
    $res = $check->get_result();
    $row = $res ? $res->fetch_assoc() : null;
    if ($row && isset($row['status']) && strtolower($row['status']) === 'approved') {
        $approvedAllowed = true;
    }
    $check->close();
} else {
    // If table doesn't exist or prepare failed, be permissive but show warning
    $approvedAllowed = false;
}

// If not approved, show message and stop
if (!$approvedAllowed) {
    echo "<div style='max-width:700px;margin:40px auto;padding:20px;border-radius:8px;background:#fff;border:1px solid #f1f1f1;text-align:center;'>
            <h4 style='color:#c00'>Notice</h4>
            <p>You are not approved to upload documents yet. Please wait for an admin approval.</p>
          </div>";
    exit;
}

// --- helper: collect datalist suggestions from existing uploads/upload_requests (if columns exist) ---
function fetch_distinct(mysqli $conn, $table, $column) {
    $vals = [];
    if (!$conn->query("DESCRIBE `$table`")) return $vals; // table missing
    $safeColumn = $conn->real_escape_string($column);
    $query = "SELECT DISTINCT `$safeColumn` AS val FROM `$table` WHERE `$safeColumn` IS NOT NULL AND `$safeColumn` != '' LIMIT 200";
    $res = $conn->query($query);
    if ($res) {
        while ($r = $res->fetch_assoc()) {
            if (!empty($r['val'])) $vals[] = $r['val'];
        }
    }
    return $vals;
}

$course_suggestions = array_unique(array_merge(
    fetch_distinct($conn, 'uploads', 'course'),
    fetch_distinct($conn, 'upload_requests', 'course')
));
$topic_suggestions = array_unique(array_merge(
    fetch_distinct($conn, 'uploads', 'topic'),
    fetch_distinct($conn, 'upload_requests', 'topic')
));
$syllabus_suggestions = array_unique(array_merge(
    fetch_distinct($conn, 'uploads', 'syllabus'),
    fetch_distinct($conn, 'upload_requests', 'syllabus')
));

// --- handle form POST (file upload + DB insert into upload_requests) ---
$messages = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // sanitize inputs
    $course = trim($_POST['course'] ?? '');
    $topic  = trim($_POST['topic'] ?? '');
    $syllabus = trim($_POST['syllabus'] ?? '');

    // file checks
    if (!isset($_FILES['file'])) {
        $messages[] = ['type'=>'danger','text'=>'No file uploaded.'];
    } else {
        $file = $_FILES['file'];
        if ($file['error'] !== UPLOAD_ERR_OK) {
            $messages[] = ['type'=>'danger','text'=>'Upload error: ' . $file['error']];
        } else {
            // validate size (max 20 MB)
            $maxBytes = 20 * 1024 * 1024;
            if ($file['size'] > $maxBytes) {
                $messages[] = ['type'=>'danger','text'=>'File too large. Max 20 MB allowed.'];
            } else {
                // allowed extensions
                $allowedExt = ['pdf','doc','docx','ppt','pptx','txt'];
                $origName = $file['name'];
                $ext = strtolower(pathinfo($origName, PATHINFO_EXTENSION));
                if (!in_array($ext, $allowedExt)) {
                    $messages[] = ['type'=>'danger','text'=>'Invalid file type. Allowed: ' . implode(', ', $allowedExt)];
                } else {
                    // create uploads directory
                    $uploadDir = __DIR__ . '/uploads/';
                    if (!is_dir($uploadDir)) {
                        if (!mkdir($uploadDir, 0777, true)) {
                            $messages[] = ['type'=>'danger','text'=>'Failed to create uploads directory.'];
                        }
                    }

                    if (empty($messages)) {
                        // generate unique filename
                        try {
                            $uniq = time() . '_' . bin2hex(random_bytes(6));
                        } catch (Exception $ex) {
                            $uniq = time() . '_' . rand(1000,9999);
                        }
                        $safeBase = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', basename($origName));
                        $newFileName = $uniq . '_' . $safeBase;
                        $targetPath = $uploadDir . $newFileName;

                        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
                            // Build insert into upload_requests dynamically depending on available columns
                            $insertCols = ['user_id','file_name','file_path','status','requested_at'];
                            $insertVals = [$userId, $origName, $targetPath, 'pending', date('Y-m-d H:i:s')];

                            // If upload_requests supports course/topic/syllabus, add them
                            foreach (['course','topic','syllabus'] as $k) {
                                if (in_array($k, $uploadReqCols)) {
                                    $insertCols[] = $k;
                                    $insertVals[] = ($k === 'course' ? $course : ($k === 'topic' ? $topic : $syllabus));
                                }
                            }

                            // Prepare dynamic INSERT
                            $cols_sql = '`' . implode('`,`', $insertCols) . '`';
                            $placeholders = implode(',', array_fill(0, count($insertCols), '?'));
                            $types = '';
                            $params = [];

                            foreach ($insertVals as $v) {
                                // user_id is int, requested_at is string, status string
                                if (is_int($v)) $types .= 'i';
                                else $types .= 's';
                                $params[] = $v;
                            }

                            $sql = "INSERT INTO `upload_requests` ($cols_sql) VALUES ($placeholders)";
                            $stmt = $conn->prepare($sql);
                            if (!$stmt) {
                                // remove file on failure
                                @unlink($targetPath);
                                $messages[] = ['type'=>'danger','text'=>'DB prepare failed: ' . $conn->error];
                            } else {
                                // bind params dynamically
                                $bind_names[] = $types;
                                for ($i=0; $i < count($params); $i++) {
                                    $bind_names[] = $params[$i];
                                }
                                // convert to references
                                $refs = [];
                                foreach ($bind_names as $key => $value) $refs[$key] = &$bind_names[$key];
                                call_user_func_array([$stmt, 'bind_param'], $refs);

                                if ($stmt->execute()) {
                                    $messages[] = ['type'=>'success','text'=>'Upload successful — request submitted for admin approval.'];
                                } else {
                                    // remove file on failure
                                    @unlink($targetPath);
                                    $messages[] = ['type'=>'danger','text'=>'DB execute failed: ' . htmlspecialchars($stmt->error)];
                                }
                                $stmt->close();
                            }
                        } else {
                            $messages[] = ['type'=>'danger','text'=>'Failed to move uploaded file to uploads/ directory. Check permissions.'];
                        }
                    }
                }
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Upload Document</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5" style="max-width:900px;">
  <div class="card shadow-sm p-4">
    <h3 class="mb-3">Upload Document</h3>

    <?php foreach ($messages as $m): ?>
      <div class="alert alert-<?php echo ($m['type'] === 'danger' ? 'danger' : ($m['type']==='success'?'success':'info')); ?>">
        <?php echo htmlspecialchars($m['text']); ?>
      </div>
    <?php endforeach; ?>

    <form method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="form-label">Course</label>
          <input list="courses" name="course" class="form-control" placeholder="Enter or choose course" required>
          <?php if (!empty($course_suggestions)): ?>
            <datalist id="courses">
              <?php foreach ($course_suggestions as $c): ?>
                <option value="<?php echo htmlspecialchars($c); ?>"></option>
              <?php endforeach; ?>
            </datalist>
          <?php endif; ?>
        </div>

        <div class="col-md-4 mb-3">
          <label class="form-label">Topic</label>
          <input list="topics" name="topic" class="form-control" placeholder="Enter or choose topic" required>
          <?php if (!empty($topic_suggestions)): ?>
            <datalist id="topics">
              <?php foreach ($topic_suggestions as $t): ?>
                <option value="<?php echo htmlspecialchars($t); ?>"></option>
              <?php endforeach; ?>
            </datalist>
          <?php endif; ?>
        </div>

        <div class="col-md-4 mb-3">
          <label class="form-label">Syllabus</label>
          <input list="syllabi" name="syllabus" class="form-control" placeholder="Enter or choose syllabus" required>
          <?php if (!empty($syllabus_suggestions)): ?>
            <datalist id="syllabi">
              <?php foreach ($syllabus_suggestions as $s): ?>
                <option value="<?php echo htmlspecialchars($s); ?>"></option>
              <?php endforeach; ?>
            </datalist>
          <?php endif; ?>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Select file (PDF, DOC, DOCX, PPT, PPTX, TXT) — max 200MB</label>
        <input type="file" name="file" class="form-control" required>
      </div>

      <div class="d-flex gap-2">
        <button class="btn btn-primary">Upload</button>
        <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
      </div>
      
    </form>
  </div>
</div>
</body>
</html>
