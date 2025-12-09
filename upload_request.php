<?php
session_start();
require 'users.php'; // DB connection ($conn)

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $topic    = trim($_POST['topic'] ?? '');
    $syllabus = trim($_POST['syllabus'] ?? '');

    if (!isset($_FILES['pdf_file']) || $_FILES['pdf_file']['error'] !== UPLOAD_ERR_OK) {
        $message = "⚠️ Error: No file selected or upload failed.";
    } else {
        $file = $_FILES['pdf_file'];
        $fileName = basename($file['name']);
        $fileTmp  = $file['tmp_name'];
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Only allow PDFs
        if ($ext !== 'pdf') {
            $message = "❌ Only PDF files are allowed.";
        } else {
            // Ensure requests/ folder exists
            $requestDir = __DIR__ . "/requests/";
            if (!is_dir($requestDir)) mkdir($requestDir, 0777, true);

            // Unique filename
            $uniqueName = time() . "_" . preg_replace("/[^A-Za-z0-9_\-\.]/", "_", $fileName);
            $targetPath = $requestDir . $uniqueName;

            if (move_uploaded_file($fileTmp, $targetPath)) {
                $userId = $_SESSION['user_id'];

                // Check if file_path, topic, syllabus columns exist
                $columns = [];
                $res = $conn->query("SHOW COLUMNS FROM upload_requests");
                while ($row = $res->fetch_assoc()) {
                    $columns[] = $row['Field'];
                }

                if (!in_array('file_path', $columns)) {
                    $conn->query("ALTER TABLE upload_requests ADD COLUMN file_path VARCHAR(255) NOT NULL AFTER file_name");
                }
                if (!in_array('topic', $columns)) {
                    $conn->query("ALTER TABLE upload_requests ADD COLUMN topic VARCHAR(255) NOT NULL DEFAULT 'General'");
                }
                if (!in_array('syllabus', $columns)) {
                    $conn->query("ALTER TABLE upload_requests ADD COLUMN syllabus VARCHAR(255) NOT NULL DEFAULT 'General'");
                }

                // Insert into upload_requests
                $stmt = $conn->prepare("INSERT INTO upload_requests (user_id, file_name, file_path, status, topic, syllabus) VALUES (?, ?, ?, 'pending', ?, ?)");
                $stmt->bind_param("issss", $userId, $fileName, $targetPath, $topic, $syllabus);

                if ($stmt->execute()) {
                    $message = "✅ File uploaded successfully! Waiting for admin approval.";
                } else {
                    $message = "❌ Database error: " . $conn->error;
                    unlink($targetPath);
                }
            } else {
                $message = "❌ Failed to move uploaded file. Check folder permissions.";
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Request</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

  <h2 class="mb-4">📤 Upload PDF</h2>

  <?php if ($message): ?>
    <div class="alert alert-info"><?php echo htmlspecialchars($message); ?></div>
  <?php endif; ?>

  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="pdf_file" class="form-label">Choose PDF File</label>
      <input type="file" name="pdf_file" id="pdf_file" class="form-control" accept="application/pdf" required>
    </div>

    <div class="mb-3">
      <label for="topic" class="form-label">Topic</label>
      <input type="text" name="topic" id="topic" class="form-control" placeholder="Enter topic" required>
    </div>

    <div class="mb-3">
      <label for="syllabus" class="form-label">Syllabus</label>
      <input type="text" name="syllabus" id="syllabus" class="form-control" placeholder="Enter syllabus" required>
    </div>

    <div class="d-flex justify-content-between mt-3">
    <button class="btn btn-primary">Upload</button>

    <a href="courses.php" class="btn btn-secondary">Back</a>
</div>

  </form>

</body>
</html>
