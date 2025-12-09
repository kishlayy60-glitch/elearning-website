<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>MBA Syllabus — Squad Learning</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    min-height: 100vh;
    color: #424ab8;
}
.navbar {
    background: rgba(0,123,255,0.85)!important;
    backdrop-filter: blur(8px);
}
.card-semester {
    background: rgb(41, 87, 185);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    margin-bottom: 25px;
    color: #fff;
}
.card-semester h3 {
    padding: 15px;
    margin: 0;
    border-bottom: 1px solid rgba(255,255,255,0.2);
}
.subject {
    padding: 15px;
    border-bottom: 1px dashed rgba(255,255,255,0.2);
}
.subject:last-child { border-bottom: none; }
.subject h5 { margin-bottom: 10px; cursor: pointer; }
.unit { margin-left: 20px; margin-bottom: 5px; cursor: pointer; }
.unit:hover, .subject h5:hover { text-decoration: underline; }
footer {
    background: rgba(0,0,0,0.3);
    padding: 10px;
}
.back-btn {
    color: #fff !important;
    font-weight: bold;
}
</style>
</head>
<body>

<nav class="navbar navbar-dark">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand" href="index.html">
      Squad E-Learning
    </a>
    <!-- 🔙 Back Button (Red) -->
    <a href="index.php" class="btn btn-danger btn-sm back-btn">⬅ Back</a>
  </div>
</nav>

<main class="container my-5">

  <h1 class="mb-4">MBA — Course Syllabus (6 Semesters)</h1>

  <!-- SEMESTER 1 -->
  <div class="card-semester">
    <h3>Semester 1</h3>
    <div class="subject">
      <h5>Management Principles</h5>
      <div class="unit" onclick="openPDF('Introduction to Management.pdf')">Unit 1: Introduction to Management</div>
      <div class="unit" onclick="openPDF('Functions of Management.pdf')">Unit 2: Functions of Management</div>
      <div class="unit" onclick="openPDF('mp_unit3.pdf')">Unit 3: Planning & Decision Making</div>
      <div class="unit" onclick="openPDF('mp_unit4.pdf')">Unit 4: Organizing & Staffing</div>
      <div class="unit" onclick="openPDF('mp_unit5.pdf')">Unit 5: Leadership & Motivation</div>
    </div>
    <div class="subject">
      <h5>Managerial Economics</h5>
      <div class="unit" onclick="openPDF('me_unit1.pdf')">Unit 1: Demand & Supply Analysis</div>
      <div class="unit" onclick="openPDF('me_unit2.pdf')">Unit 2: Production & Cost Analysis</div>
      <div class="unit" onclick="openPDF('me_unit3.pdf')">Unit 3: Market Structures</div>
      <div class="unit" onclick="openPDF('me_unit4.pdf')">Unit 4: Pricing Strategies</div>
      <div class="unit" onclick="openPDF('me_unit5.pdf')">Unit 5: Business Forecasting</div>
    </div>
    <div class="subject">
      <h5>Accounting for Managers</h5>
      <div class="unit" onclick="openPDF('am_unit1.pdf')">Unit 1: Financial Statements</div>
      <div class="unit" onclick="openPDF('am_unit2.pdf')">Unit 2: Ratio Analysis</div>
      <div class="unit" onclick="openPDF('am_unit3.pdf')">Unit 3: Budgeting</div>
      <div class="unit" onclick="openPDF('am_unit4.pdf')">Unit 4: Cost Accounting</div>
      <div class="unit" onclick="openPDF('am_unit5.pdf')">Unit 5: Break-even Analysis</div>
    </div>
  </div>

  <!-- SEMESTER 2 -->
  <div class="card-semester">
    <h3>Semester 2</h3>
    <div class="subject">
      <h5>Organizational Behavior</h5>
      <div class="unit" onclick="openPDF('ob_unit1.pdf')">Unit 1: Individual Behavior</div>
      <div class="unit" onclick="openPDF('ob_unit2.pdf')">Unit 2: Group Dynamics</div>
      <div class="unit" onclick="openPDF('ob_unit3.pdf')">Unit 3: Motivation & Leadership</div>
      <div class="unit" onclick="openPDF('ob_unit4.pdf')">Unit 4: Communication</div>
      <div class="unit" onclick="openPDF('ob_unit5.pdf')">Unit 5: Organizational Culture</div>
    </div>
    <div class="subject">
      <h5>Marketing Management</h5>
      <div class="unit" onclick="openPDF('mm_unit1.pdf')">Unit 1: Marketing Concepts</div>
      <div class="unit" onclick="openPDF('mm_unit2.pdf')">Unit 2: Consumer Behavior</div>
      <div class="unit" onclick="openPDF('mm_unit3.pdf')">Unit 3: 4Ps of Marketing</div>
      <div class="unit" onclick="openPDF('mm_unit4.pdf')">Unit 4: Marketing Strategy</div>
      <div class="unit" onclick="openPDF('mm_unit5.pdf')">Unit 5: Digital Marketing Basics</div>
    </div>
    <div class="subject">
      <h5>Financial Management</h5>
      <div class="unit" onclick="openPDF('fm_unit1.pdf')">Unit 1: Time Value of Money</div>
      <div class="unit" onclick="openPDF('fm_unit2.pdf')">Unit 2: Capital Budgeting</div>
      <div class="unit" onclick="openPDF('fm_unit3.pdf')">Unit 3: Working Capital Management</div>
      <div class="unit" onclick="openPDF('fm_unit4.pdf')">Unit 4: Cost of Capital</div>
      <div class="unit" onclick="openPDF('fm_unit5.pdf')">Unit 5: Capital Structure</div>
    </div>
  </div>

  <!-- SEMESTER 3 -->
  <div class="card-semester">
    <h3>Semester 3</h3>
    <div class="subject"><h5 onclick="openPDF('hrm.pdf')">Human Resource Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('operations_mgmt.pdf')">Operations Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('business_research.pdf')">Business Research Methods</h5></div>
  </div>

  <!-- SEMESTER 4 -->
  <div class="card-semester">
    <h3>Semester 4</h3>
    <div class="subject"><h5 onclick="openPDF('strategic_mgmt.pdf')">Strategic Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('international_business.pdf')">International Business</h5></div>
    <div class="subject"><h5 onclick="openPDF('entrepreneurship.pdf')">Entrepreneurship & Innovation</h5></div>
  </div>

  <!-- SEMESTER 5 -->
  <div class="card-semester">
    <h3>Semester 5</h3>
    <div class="subject"><h5 onclick="openPDF('project_mgmt.pdf')">Project Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('business_ethics.pdf')">Business Ethics & Corporate Governance</h5></div>
  </div>

  <!-- SEMESTER 6 -->
  <div class="card-semester">
    <h3>Semester 6</h3>
    <div class="subject"><h5 onclick="openPDF('capstone.pdf')">Capstone Project / Dissertation</h5></div>
  </div>

</main>

<footer class="text-center">
  <img src="images/squad-icon.png" alt="Squad Logo" width="30" height="30" class="me-1 rounded-circle">
  <small>&copy; 2025 Squad Learning | All Rights Reserved</small>
</footer>

<script>
function openPDF(filename) {
    window.open("coursepdfs/" + filename, "_blank");
}
</script>

</body>
</html>
