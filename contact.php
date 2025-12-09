<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact — E-Learning</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Squad E-Learning</a>
    <div id="nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container my-5">
  <h1 class="mb-4 text-center">Contact & Feedback</h1>

  <!-- Contact Details -->
  <div class="row mb-5">
    <div class="col-md-4 text-center">
      <div class="p-4 shadow-sm rounded bg-light">
        <h5>📍 Address</h5>
        <p>123 Learning Street, Delhi, India</p>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="p-4 shadow-sm rounded bg-light">
        <h5>📧 Email</h5>
        <p>support@elearning.com</p>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="p-4 shadow-sm rounded bg-light">
        <h5>📞 Phone</h5>
        <p>+91 98765 43210</p>
      </div>
    </div>
  </div>

  <!-- Feedback Form -->
  <div class="card shadow-lg p-4">
    <h4 class="mb-3">Send us your Feedback</h4>
    <form method="post" action="feedback.php">
      <div class="mb-3">
        <label class="form-label">Your Name</label>
        <input class="form-control" type="text" name="name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" type="email" name="email" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" rows="4" name="message" required></textarea>
      </div>
      <button class="btn btn-primary w-100">Send Feedback</button>
    </form>
  </div>
</main>

<footer class="bg-light py-4 mt-5">
  <div class="container text-center">
    <small>&copy; 2025 E-Learning. All rights reserved.</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
