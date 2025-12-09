<?php
session_start();
require 'users.php'; // Database connection

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']);
$username = $isLoggedIn ? $_SESSION['username'] : "";

// Search query
$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : "";
$searchTerm = strtolower($searchQuery);

// ✅ FIX: point to admin/pdfs folder instead of just pdfs
$pdfFolder = __DIR__ . "/admin/pdfs";

// Check if folder exists
if (!is_dir($pdfFolder)) {
    die("<h3 style='color:red; text-align:center;'>Error: 'admin/pdfs' folder not found!</h3>");
}

// Get all PDF files from the folder
$allFiles = [];
$files = glob($pdfFolder . "/*.pdf");

// Filter and prepare file info
foreach ($files as $filePath) {
    $fileName = basename($filePath);

    // If search term exists, skip non-matching files
    if ($searchTerm && stripos($fileName, $searchTerm) === false) {
        continue;
    }

    $uploadedAt = date("Y-m-d H:i:s", filemtime($filePath));

    $allFiles[] = [
        'name' => $fileName,
        'path' => "admin/pdfs/" . $fileName, // ✅ also updated to match correct URL
        'type' => 'PDF Document',
        'uploaded_at' => $uploadedAt
    ];
}

// Sort all files by uploaded date (latest first)
usort($allFiles, function($a, $b) {
    return strtotime($b['uploaded_at']) - strtotime($a['uploaded_at']);
});
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Squad Learning - PDFs</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
    min-height: 100vh;
    color: #fff;
}
.navbar { background: rgba(0,123,255,0.85)!important; backdrop-filter: blur(8px); }
.search-section { text-align: center; margin: 50px 0; }
.search-section input { width: 50%; max-width: 500px; padding: 10px; border-radius: 5px; border: none; outline: none; font-size: 16px; }
.search-section button { padding: 10px 20px; border: none; border-radius: 5px; background-color: #ffc107; color: #000; font-weight: bold; cursor: pointer; }
.card-upload { background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 15px; color: #fff; margin-bottom: 20px; }
.card-upload h5 { font-weight: bold; }
.card-upload small { color: #ddd; }
#uploadBtn { position: fixed; bottom: 30px; right: 30px; z-index: 999; background-color: #28a745; color: #fff; border-radius: 50px; padding: 15px 25px; font-size: 18px; font-weight: bold; border: none; cursor: pointer; }
#uploadBtn:hover { background-color: #218838; }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Squad E-Learning</a>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <?php if(!$isLoggedIn): ?>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout (<?php echo htmlspecialchars($username); ?>)</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="search-section">
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Search PDFs..." value="<?php echo htmlspecialchars($searchQuery); ?>">
        <button type="submit">Search</button>
    </form>
</div>

<div class="container">
    <div class="row">
        <?php if (!empty($allFiles)): ?>
            <?php foreach ($allFiles as $file): ?>
                <div class="col-md-4">
                    <div class="card card-upload p-3">
                        <h5><?php echo htmlspecialchars($file['name']); ?></h5>
                        <p><small><?php echo htmlspecialchars(date("d M Y", strtotime($file['uploaded_at']))); ?></small></p>
                        <a href="<?php echo htmlspecialchars($file['path']); ?>" target="_blank" class="btn btn-primary btn-sm mt-2">View</a>
                        <a href="<?php echo htmlspecialchars($file['path']); ?>" download class="btn btn-warning btn-sm mt-2 ms-2">Download</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center text-white">No PDFs found in admin/pdfs folder.</p>
        <?php endif; ?>
    </div>
</div>

<button id="uploadBtn" onclick="handleUpload()">Upload</button>

<script>
function handleUpload() {
    <?php if(!$isLoggedIn): ?>
        window.location.href = 'login.php';
    <?php else: ?>
        window.location.href = 'upload_request.php';
    <?php endif; ?>
}
</script>

</body>
</html>
