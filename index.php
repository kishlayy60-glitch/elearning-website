<?php
// ======================================================
// AUTO LOGOUT SETTINGS
// ======================================================

// Session ends when browser closes
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);

session_start();

// Auto logout after inactivity (10 minutes)
$timeout = 600; // 600 sec = 10 min

if (isset($_SESSION['last_time']) && time() - $_SESSION['last_time'] > $timeout) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$_SESSION['last_time'] = time();


// ======================================================
// DATABASE CONNECTION
// ======================================================
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pdf_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>E-Learning — Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <?php if (!isset($_SESSION['user_role'])): ?>
  <!-- Redirect to login.php after 2 seconds ALWAYS when user visits the site -->
  <script>
      setTimeout(function() {
          window.location.href = "login.php";
      }, 2000);
  </script>
  <?php endif; ?>
</head>

<body>




<!-- ==========================================
NAVBAR
========================================== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Squad E-Learning</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact & Feedback</a></li>

        <?php if (!isset($_SESSION['user_role'])): ?>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <?php endif; ?>

        <?php if (isset($_SESSION['user_role'])): ?>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>


<!-- ==========================================
HEADER SECTION
========================================== -->
<header class="hero text-center text-white">
  <div class="container">
    <h1 class="display-5">Learn anything, anywhere</h1>
    <p class="lead">Explore courses, learn online, and grow your skills.</p>
    <a class="btn btn-light btn-lg" href="courses.php">Browse Courses</a>
  </div>
</header>


<!-- ==========================================
MAIN CONTENT — COURSE CARDS
========================================== -->
<main class="container my-5">
  <h2 class="mb-4">View Courses</h2>

  <div class="row">

    <!-- BBA -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="bbacourse.png" class="card-img-top" alt="BBA">
        <div class="card-body">
          <h5 class="card-title">BBA</h5>
          <p class="card-text">Bachelor of Business Administration.</p>
          <a href="bba.php" class="btn btn-primary">View course</a>
        </div>
      </div>
    </div>

    <!-- BCA -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="bcacourse.jpg" class="card-img-top" alt="BCA">
        <div class="card-body">
          <h5 class="card-title">BCA</h5>
          <p class="card-text">Bachelor of Computer Applications.</p>
          <a href="bca.php" class="btn btn-primary">View course</a>
        </div>
      </div>
    </div>

    <!-- B.Com -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="bcomimage.jpg" class="card-img-top" alt="B.Com">
        <div class="card-body">
          <h5 class="card-title">B.Com</h5>
          <p class="card-text">Bachelor of Commerce.</p>
          <a href="bcom.php" class="btn btn-primary">View course</a>
        </div>
      </div>
    </div>

    <!-- B.Sc -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="bscimage.jpg" class="card-img-top" alt="B.Sc">
        <div class="card-body">
          <h5 class="card-title">B.Sc</h5>
          <p class="card-text">Bachelor of Science.</p>
          <a href="bsc.php" class="btn btn-primary">View course</a>
        </div>
      </div>
    </div>

    <!-- M.Sc -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="mscimage.png" class="card-img-top" alt="M.Sc">
        <div class="card-body">
          <h5 class="card-title">M.Sc</h5>
          <p class="card-text">Master of Science.</p>
          <a href="msc.php" class="btn btn-primary">View course</a>
        </div>
      </div>
    </div>

    <!-- MBA -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="mbaimage.png" class="card-img-top" alt="MBA">
        <div class="card-body">
          <h5 class="card-title">MBA</h5>
          <p class="card-text">Master of Business Administration.</p>
          <a href="mba.php" class="btn btn-primary">View course</a>
        </div>
      </div>
    </div>

    <!-- MCA -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="mcaimage.jpg" class="card-img-top" alt="MCA">
        <div class="card-body">
          <h5 class="card-title">MCA</h5>
          <p class="card-text">Master of Computer Applications.</p>
          <a href="mca.php" class="btn btn-primary">View course</a>
        </div>
      </div>
    </div>

    <!-- M.Com -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="mcomimage.jpg" class="card-img-top" alt="M.Com">
        <div class="card-body">
          <h5 class="card-title">M.Com</h5>
          <p class="card-text">Master of Commerce.</p>
          <a href="mcom.php" class="btn btn-primary">View course</a>
        </div>
      </div>
    </div>

  </div>
</main>


<!-- ==========================================
FOOTER
========================================== -->
<footer class="bg-light py-4">
  <div class="container text-center">
    <small>&copy; 2025 E-Learning site</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
