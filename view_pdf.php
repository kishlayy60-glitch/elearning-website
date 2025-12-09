<?php
session_start();

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    die("<h3 style='color:red;text-align:center;'>🚫 Unauthorized access</h3>");
}

$file = $_GET['file'] ?? '';
if (empty($file)) {
    die("<h3 style='color:red;text-align:center;'>⚠️ No file specified.</h3>");
}

$file = basename($file);

// --- FIXED PATH DETECTION ---
$path = realpath(__DIR__ . "/requests/" . $file);

if ($path === false) {
    $path = realpath(__DIR__ . "/requests/" . $file);
}

if ($path === false || !file_exists($path)) {
    die("<h3 style='color:red;text-align:center;'>❌ File not found: " . htmlspecialchars($file) .
        "<br>Checked path: " . htmlspecialchars(__DIR__ . "/requests/" . $file) . "</h3>");
}

header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=\"" . basename($path) . "\"");
header("Content-Length: " . filesize($path));
readfile($path);
exit;
?>
