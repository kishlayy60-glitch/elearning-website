<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session (only once at the top)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "users.php"; // Database connection file; must define $conn

$error = "";

// Process login form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        $error = "Please enter both email and password.";
    } else {
        // Prepare SQL query
        $stmt = $conn->prepare("SELECT id, first_name, last_name, email, password, user_role FROM users WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Verify password using password_verify
            if (password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['user_id']    = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role']  = $user['user_role'];
                $_SESSION['username']   = $user['first_name'];

                // Redirect based on role
                if ($user['user_role'] === 'admin') {
                    header("Location: admin/admin.php");
                    exit;
                } else {
                    header("Location: index.php");
                    exit;
                }
            } else {
                $error = "Invalid email or password.";
            }
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login - E-Learn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container" style="max-width:420px; margin-top:80px;">
    <div class="card p-4 shadow-sm">
      <h3 class="mb-3">Login</h3>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>

      <form method="post" novalidate>
        <div class="mb-2">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>

      <div class="mt-3 text-center">
        <p>Don't have an account? <a href="registration.php">Register</a></p>
      </div>
    </div>
  </div>
</body>
</html>
