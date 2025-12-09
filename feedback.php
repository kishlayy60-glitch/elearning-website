<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "pdf_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Simple validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('❌ Please fill all fields.'); window.history.back();</script>";
        exit;
    }

    // Insert query
    $sql = "INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sss", $name, $email, $message);
        if ($stmt->execute()) {
            // Redirect to manage_feedback.php after successful submission
            echo "<script>alert('✅ Thank you! Your feedback has been submitted.'); window.location.href='manage_feedback.php';</script>";
        } else {
            echo "<script>alert('❌ Failed to submit feedback. Please try again.'); window.history.back();</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('❌ Database error: " . $conn->error . "'); window.history.back();</script>";
    }
}

$conn->close();
?>
