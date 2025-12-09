<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>B.Com Syllabus — Squad Learning</title>
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

  <h1 class="mb-4">B.Com Course — Syllabus (6 Semesters)</h1>

  <!-- SEMESTER 1 -->
  <div class="card-semester">
    <h3>Semester 1</h3>
    <div class="subject">
      <h5>Financial Accounting</h5>
      <div class="unit" onclick="openPDF('accounting principle.pdf')">Unit 1: Accounting Principles</div>
      <div class="unit" onclick="openPDF('Journal, Ledger, Trial Balance.pdf')">Unit 2: Journal, Ledger, Trial Balance</div>
      <div class="unit" onclick="openPDF('fa_unit3.pdf')">Unit 3: Final Accounts</div>
      <div class="unit" onclick="openPDF('fa_unit4.pdf')">Unit 4: Depreciation Accounting</div>
      <div class="unit" onclick="openPDF('fa_unit5.pdf')">Unit 5: Accounting for Non-Profit</div>
    </div>
    <div class="subject">
      <h5>Business Organization & Management</h5>
      <div class="unit" onclick="openPDF('bom_unit1.pdf')">Unit 1: Nature of Business</div>
      <div class="unit" onclick="openPDF('bom_unit2.pdf')">Unit 2: Forms of Business Organization</div>
      <div class="unit" onclick="openPDF('bom_unit3.pdf')">Unit 3: Principles of Management</div>
      <div class="unit" onclick="openPDF('bom_unit4.pdf')">Unit 4: Planning & Organizing</div>
      <div class="unit" onclick="openPDF('bom_unit5.pdf')">Unit 5: Leadership & Control</div>
    </div>
  </div>

  <!-- SEMESTER 2 -->
  <div class="card-semester">
    <h3>Semester 2</h3>
    <div class="subject">
      <h5>Corporate Accounting</h5>
      <div class="unit" onclick="openPDF('ca_unit1.pdf')">Unit 1: Issue of Shares</div>
      <div class="unit" onclick="openPDF('ca_unit2.pdf')">Unit 2: Redemption of Debentures</div>
      <div class="unit" onclick="openPDF('ca_unit3.pdf')">Unit 3: Final Accounts of Companies</div>
      <div class="unit" onclick="openPDF('ca_unit4.pdf')">Unit 4: Amalgamation & Absorption</div>
      <div class="unit" onclick="openPDF('ca_unit5.pdf')">Unit 5: Valuation of Shares</div>
    </div>
    <div class="subject">
      <h5>Business Mathematics & Statistics</h5>
      <div class="unit" onclick="openPDF('bms_unit1.pdf')">Unit 1: Ratio & Proportion</div>
      <div class="unit" onclick="openPDF('bms_unit2.pdf')">Unit 2: Matrices & Determinants</div>
      <div class="unit" onclick="openPDF('bms_unit3.pdf')">Unit 3: Probability</div>
      <div class="unit" onclick="openPDF('bms_unit4.pdf')">Unit 4: Correlation & Regression</div>
      <div class="unit" onclick="openPDF('bms_unit5.pdf')">Unit 5: Index Numbers</div>
    </div>
  </div>

  <!-- SEMESTER 3 -->
  <div class="card-semester">
    <h3>Semester 3</h3>
    <div class="subject"><h5 onclick="openPDF('cost_accounting.pdf')">Cost Accounting</h5></div>
    <div class="subject"><h5 onclick="openPDF('income_tax1.pdf')">Income Tax Law & Practice I</h5></div>
    <div class="subject"><h5 onclick="openPDF('business_law.pdf')">Business Law</h5></div>
  </div>

  <!-- SEMESTER 4 -->
  <div class="card-semester">
    <h3>Semester 4</h3>
    <div class="subject"><h5 onclick="openPDF('auditing.pdf')">Auditing</h5></div>
    <div class="subject"><h5 onclick="openPDF('income_tax2.pdf')">Income Tax Law & Practice II</h5></div>
    <div class="subject"><h5 onclick="openPDF('marketing_mgmt.pdf')">Marketing Management</h5></div>
  </div>

  <!-- SEMESTER 5 -->
  <div class="card-semester">
    <h3>Semester 5</h3>
    <div class="subject"><h5 onclick="openPDF('management_accounting.pdf')">Management Accounting</h5></div>
    <div class="subject"><h5 onclick="openPDF('financial_mgmt.pdf')">Financial Management</h5></div>
    <div class="subject"><h5 onclick="openPDF('elective1.pdf')">Elective I (e.g., Banking & Insurance)</h5></div>
  </div>

  <!-- SEMESTER 6 -->
  <div class="card-semester">
    <h3>Semester 6</h3>
    <div class="subject"><h5 onclick="openPDF('indirect_taxes.pdf')">Indirect Taxes (GST)</h5></div>
    <div class="subject"><h5 onclick="openPDF('international_business.pdf')">International Business</h5></div>
    <div class="subject"><h5 onclick="openPDF('elective2.pdf')">Elective II (e.g., Investment Analysis)</h5></div>
  </div>

</main>

<footer class="text-center">
  <img src="images/squad-icon.png" alt="Squad Logo" width="30" height="30" class="me-1 rounded-circle">
  <small>&copy; 2025 Squad Learning</small>
</footer>

<script>
function openPDF(filename) {
    window.open("coursepdfs/" + filename, "_blank");
}
</script>

</body>
</html>
