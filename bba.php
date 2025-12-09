<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>BBA Syllabus — Squad Learning</title>
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

  <h1 class="mb-4">BBA Course — Syllabus (6 Semesters)</h1>

  <!-- SEMESTER 1 -->
  <div class="card-semester">
    <h3>Semester 1</h3>
    <div class="subject">
      <h5>Principles of Management</h5>
      <div class="unit" onclick="openPDF('Nature & Functions of Management.pdf')">Unit 1: Nature & Functions of Management</div>
      <div class="unit" onclick="openPDF('Planning & Decision Making.pdf')">Unit 2: Planning & Decision Making</div>
      <div class="unit" onclick="openPDF('Organizing & Staffing.pdf')">Unit 3: Organizing & Staffing</div>
      <div class="unit" onclick="openPDF('Leadership & Motivation.pdf')">Unit 4: Leadership & Motivation</div>
      <div class="unit" onclick="openPDF('Controlling & Coordination.pdf')">Unit 5: Controlling & Coordination</div>
    </div>
    <div class="subject">
      <h5>Business Communication</h5>
      <div class="unit" onclick="openPDF('Basics of Communication.pdf')">Unit 1: Basics of Communication</div>
      <div class="unit" onclick="openPDF('communication_unit2.pdf')">Unit 2: Business Letters & Reports</div>
      <div class="unit" onclick="openPDF('communication_unit3.pdf')">Unit 3: Oral Communication</div>
      <div class="unit" onclick="openPDF('communication_unit4.pdf')">Unit 4: Meetings & Presentations</div>
      <div class="unit" onclick="openPDF('communication_unit5.pdf')">Unit 5: Modern Communication Channels</div>
    </div>
    <div class="subject">
      <h5>Financial Accounting</h5>
      <div class="unit" onclick="openPDF('accounting_unit1.pdf')">Unit 1: Basics of Accounting</div>
      <div class="unit" onclick="openPDF('accounting_unit2.pdf')">Unit 2: Journal, Ledger, Trial Balance</div>
      <div class="unit" onclick="openPDF('accounting_unit3.pdf')">Unit 3: Final Accounts</div>
      <div class="unit" onclick="openPDF('accounting_unit4.pdf')">Unit 4: Depreciation & Reserves</div>
      <div class="unit" onclick="openPDF('accounting_unit5.pdf')">Unit 5: Partnership Accounts</div>
    </div>
  </div>

  <!-- SEMESTER 2 -->
  <div class="card-semester">
    <h3>Semester 2</h3>
    <div class="subject">
      <h5>Organizational Behaviour</h5>
      <div class="unit" onclick="openPDF('ob_unit1.pdf')">Unit 1: Introduction to OB</div>
      <div class="unit" onclick="openPDF('ob_unit2.pdf')">Unit 2: Perception, Personality, Attitudes</div>
      <div class="unit" onclick="openPDF('ob_unit3.pdf')">Unit 3: Motivation Theories</div>
      <div class="unit" onclick="openPDF('ob_unit4.pdf')">Unit 4: Leadership Styles</div>
      <div class="unit" onclick="openPDF('ob_unit5.pdf')">Unit 5: Group Dynamics & Teamwork</div>
    </div>
    <div class="subject">
      <h5>Marketing Management</h5>
      <div class="unit" onclick="openPDF('marketing_unit1.pdf')">Unit 1: Introduction to Marketing</div>
      <div class="unit" onclick="openPDF('marketing_unit2.pdf')">Unit 2: Consumer Behaviour</div>
      <div class="unit" onclick="openPDF('marketing_unit3.pdf')">Unit 3: Product & Pricing Strategies</div>
      <div class="unit" onclick="openPDF('marketing_unit4.pdf')">Unit 4: Promotion & Distribution</div>
      <div class="unit" onclick="openPDF('marketing_unit5.pdf')">Unit 5: Digital Marketing Basics</div>
    </div>
    <div class="subject">
      <h5>Business Mathematics</h5>
      <div class="unit" onclick="openPDF('math_unit1.pdf')">Unit 1: Matrices & Determinants</div>
      <div class="unit" onclick="openPDF('math_unit2.pdf')">Unit 2: Differential Calculus</div>
      <div class="unit" onclick="openPDF('math_unit3.pdf')">Unit 3: Probability</div>
      <div class="unit" onclick="openPDF('math_unit4.pdf')">Unit 4: Time Value of Money</div>
      <div class="unit" onclick="openPDF('math_unit5.pdf')">Unit 5: Linear Programming</div>
    </div>
  </div>

  <!-- SEMESTER 3 -->
  <div class="card-semester">
    <h3>Semester 3</h3>
    <div class="subject"><h5 onclick="openPDF('human_resource_management.pdf')">Human Resource Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('business_economics.pdf')">Business Economics</h5></div>
    <div class="subject"><h5 onclick="openPDF('management_accounting.pdf')">Management Accounting</h5></div>
  </div>

  <!-- SEMESTER 4 -->
  <div class="card-semester">
    <h3>Semester 4</h3>
    <div class="subject"><h5 onclick="openPDF('financial_management.pdf')">Financial Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('production_operations.pdf')">Production & Operations Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('business_research_methods.pdf')">Business Research Methods</h5></div>
  </div>

  <!-- SEMESTER 5 -->
  <div class="card-semester">
    <h3>Semester 5</h3>
    <div class="subject"><h5 onclick="openPDF('strategic_management.pdf')">Strategic Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('entrepreneurship_development.pdf')">Entrepreneurship Development</h5></div>
    <div class="subject"><h5 onclick="openPDF('elective1.pdf')">Elective I</h5></div>
  </div>

  <!-- SEMESTER 6 -->
  <div class="card-semester">
    <h3>Semester 6</h3>
    <div class="subject"><h5 onclick="openPDF('international_business.pdf')">International Business</h5></div>
    <div class="subject"><h5 onclick="openPDF('business_ethics.pdf')">Business Ethics & Corporate Governance</h5></div>
    <div class="subject"><h5 onclick="openPDF('project_viva.pdf')">Project & Viva</h5></div>
  </div>

</main>

<script>
function openPDF(filename) {
    window.open("coursepdfs/" + filename, "_blank");
}
</script>

</body>
</html>
