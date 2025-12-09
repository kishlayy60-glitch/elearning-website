<?php
session_start();
include "users.php"; // database connection

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name  = trim($_POST['last_name'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $phone      = trim($_POST['phone'] ?? '');
    $address    = trim($_POST['address'] ?? '');
    $password   = trim($_POST['password'] ?? '');
    $role       = "client";

    if (!$first_name || !$email || !$password) {
        $error = "Please fill required fields (first name, email, password).";
    } else {
        // Check duplicate email
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($res && $res->num_rows > 0) {
            $error = "Email is already registered. Please login or use another email.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, phone, address, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $first_name, $last_name, $email, $phone, $address, $hashed_password, $role);
            if ($stmt->execute()) {
                $success = "Registration successful. You can now <a href='login.php'>login</a>.";
            } else {
                $error = "Registration failed. Please try again later.";
            }
        }
    }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register - E-Learn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container" style="max-width:720px; margin-top:40px;">
    <div class="card p-4 shadow-sm">
      <h3 class="mb-3">Create an account</h3>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>
      <?php if (!empty($success)): ?>
        <div class="alert alert-success"><?php echo $success; ?></div>
      <?php endif; ?>

      <form method="post" novalidate>
        <div class="row">
          <div class="col-md-6 mb-2">
            <input type="text" name="first_name" class="form-control" placeholder="First name" required>
          </div>
          <div class="col-md-6 mb-2">
            <input type="text" name="last_name" class="form-control" placeholder="Last name">
          </div>
        </div>
        <div class="mb-2">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-2">
          <input type="text" name="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="mb-2">
          <input type="text" name="address" class="form-control" placeholder="Address">
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-success">Register</button>
      </form>

      <div class="mt-3">
        Already have an account? <a href="login.php">Login</a>
      </div>
    </div>
  </div>
</body>
</html>
