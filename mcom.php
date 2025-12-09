<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>M.Com Syllabus — Squad Learning</title>
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
    text-align: center;
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
    <a class="navbar-brand" href="index.php">
      Squad E-Learning
    </a>
    <a href="index.php" class="btn btn-danger btn-sm back-btn">⬅ Back</a>
  </div>
</nav>

<main class="container my-5">
<h1 class="mb-4">M.Com — Course Syllabus (6 Semesters)</h1>

<!-- SEMESTER 1 -->
<div class="card-semester">
  <h3>Semester 1</h3>
  <div class="subject">
    <h5>Financial Accounting</h5>
    <div class="unit" onclick="openPDF('Accounting Principles & Concepts.pdf')">Unit 1: Accounting Principles & Concepts</div>
    <div class="unit" onclick="openPDF('Journal, Ledger & Trial Balance.pdf')">Unit 2: Journal, Ledger & Trial Balance</div>
    <div class="unit" onclick="openPDF('fa_unit3.pdf')">Unit 3: Preparation of Financial Statements</div>
    <div class="unit" onclick="openPDF('fa_unit4.pdf')">Unit 4: Depreciation Accounting</div>
    <div class="unit" onclick="openPDF('fa_unit5.pdf')">Unit 5: Accounting Standards Overview</div>
  </div>
  <div class="subject">
    <h5>Business Environment</h5>
    <div class="unit" onclick="openPDF('be_unit1.pdf')">Unit 1: Introduction to Business Environment</div>
    <div class="unit" onclick="openPDF('be_unit2.pdf')">Unit 2: Economic, Political & Legal Environment</div>
    <div class="unit" onclick="openPDF('be_unit3.pdf')">Unit 3: Global Environment</div>
    <div class="unit" onclick="openPDF('be_unit4.pdf')">Unit 4: Government Policies</div>
    <div class="unit" onclick="openPDF('be_unit5.pdf')">Unit 5: Business Ethics</div>
  </div>
  <div class="subject">
    <h5>Managerial Economics</h5>
    <div class="unit" onclick="openPDF('me_unit1.pdf')">Unit 1: Demand & Supply Analysis</div>
    <div class="unit" onclick="openPDF('me_unit2.pdf')">Unit 2: Production & Cost Analysis</div>
    <div class="unit" onclick="openPDF('me_unit3.pdf')">Unit 3: Market Structures</div>
    <div class="unit" onclick="openPDF('me_unit4.pdf')">Unit 4: Pricing Policies</div>
    <div class="unit" onclick="openPDF('me_unit5.pdf')">Unit 5: Business Forecasting</div>
  </div>
</div>

<!-- SEMESTER 2 -->
<div class="card-semester">
  <h3>Semester 2</h3>
  <div class="subject">
    <h5>Corporate Accounting</h5>
    <div class="unit" onclick="openPDF('ca_unit1.pdf')">Unit 1: Issue of Shares & Debentures</div>
    <div class="unit" onclick="openPDF('ca_unit2.pdf')">Unit 2: Redemption of Shares & Debentures</div>
    <div class="unit" onclick="openPDF('ca_unit3.pdf')">Unit 3: Final Accounts of Companies</div>
    <div class="unit" onclick="openPDF('ca_unit4.pdf')">Unit 4: Valuation of Goodwill & Shares</div>
    <div class="unit" onclick="openPDF('ca_unit5.pdf')">Unit 5: Amalgamation & Absorption</div>
  </div>
  <div class="subject">
    <h5>Business Statistics</h5>
    <div class="unit" onclick="openPDF('bs_unit1.pdf')">Unit 1: Measures of Central Tendency</div>
    <div class="unit" onclick="openPDF('bs_unit2.pdf')">Unit 2: Measures of Dispersion</div>
    <div class="unit" onclick="openPDF('bs_unit3.pdf')">Unit 3: Correlation & Regression</div>
    <div class="unit" onclick="openPDF('bs_unit4.pdf')">Unit 4: Probability & Distributions</div>
    <div class="unit" onclick="openPDF('bs_unit5.pdf')">Unit 5: Index Numbers & Time Series</div>
  </div>
  <div class="subject">
    <h5>Business Law</h5>
    <div class="unit" onclick="openPDF('bl_unit1.pdf')">Unit 1: Contract Act</div>
    <div class="unit" onclick="openPDF('bl_unit2.pdf')">Unit 2: Companies Act</div>
    <div class="unit" onclick="openPDF('bl_unit3.pdf')">Unit 3: Negotiable Instruments Act</div>
    <div class="unit" onclick="openPDF('bl_unit4.pdf')">Unit 4: Consumer Protection</div>
    <div class="unit" onclick="openPDF('bl_unit5.pdf')">Unit 5: Cyber Law Basics</div>
  </div>
</div>

<!-- SEMESTER 3 -->
<div class="card-semester">
  <h3>Semester 3</h3>
  <div class="subject">
    <h5>Cost Accounting</h5>
    <div class="unit" onclick="openPDF('co_unit1.pdf')">Unit 1: Cost Concepts & Classification</div>
    <div class="unit" onclick="openPDF('co_unit2.pdf')">Unit 2: Material & Labor Costing</div>
    <div class="unit" onclick="openPDF('co_unit3.pdf')">Unit 3: Overhead & Cost Allocation</div>
    <div class="unit" onclick="openPDF('co_unit4.pdf')">Unit 4: Marginal & Standard Costing</div>
    <div class="unit" onclick="openPDF('co_unit5.pdf')">Unit 5: Budgetary Control</div>
  </div>
  <div class="subject">
    <h5>Taxation (Direct & Indirect)</h5>
    <div class="unit" onclick="openPDF('tax_unit1.pdf')">Unit 1: Income Tax Basics</div>
    <div class="unit" onclick="openPDF('tax_unit2.pdf')">Unit 2: Corporate Taxation</div>
    <div class="unit" onclick="openPDF('tax_unit3.pdf')">Unit 3: GST & Indirect Taxes</div>
    <div class="unit" onclick="openPDF('tax_unit4.pdf')">Unit 4: Tax Planning</div>
    <div class="unit" onclick="openPDF('tax_unit5.pdf')">Unit 5: Tax Compliance</div>
  </div>
  <div class="subject">
    <h5>Research Methodology</h5>
    <div class="unit" onclick="openPDF('rm_unit1.pdf')">Unit 1: Research Design</div>
    <div class="unit" onclick="openPDF('rm_unit2.pdf')">Unit 2: Data Collection Techniques</div>
    <div class="unit" onclick="openPDF('rm_unit3.pdf')">Unit 3: Sampling Methods</div>
    <div class="unit" onclick="openPDF('rm_unit4.pdf')">Unit 4: Data Analysis Tools</div>
    <div class="unit" onclick="openPDF('rm_unit5.pdf')">Unit 5: Report Writing</div>
  </div>
</div>

<!-- SEMESTER 4 -->
<div class="card-semester">
  <h3>Semester 4</h3>
  <div class="subject">
    <h5>Financial Management</h5>
    <div class="unit" onclick="openPDF('fm_unit1.pdf')">Unit 1: Time Value of Money</div>
    <div class="unit" onclick="openPDF('fm_unit2.pdf')">Unit 2: Capital Budgeting</div>
    <div class="unit" onclick="openPDF('fm_unit3.pdf')">Unit 3: Capital Structure & Cost of Capital</div>
    <div class="unit" onclick="openPDF('fm_unit4.pdf')">Unit 4: Working Capital Management</div>
    <div class="unit" onclick="openPDF('fm_unit5.pdf')">Unit 5: Dividend Decisions</div>
  </div>
  <div class="subject">
    <h5>Investment & Portfolio Management</h5>
    <div class="unit" onclick="openPDF('ip_unit1.pdf')">Unit 1: Securities & Financial Markets</div>
    <div class="unit" onclick="openPDF('ip_unit2.pdf')">Unit 2: Portfolio Theory</div>
    <div class="unit" onclick="openPDF('ip_unit3.pdf')">Unit 3: Risk & Return Analysis</div>
    <div class="unit" onclick="openPDF('ip_unit4.pdf')">Unit 4: Mutual Funds & Derivatives</div>
    <div class="unit" onclick="openPDF('ip_unit5.pdf')">Unit 5: Performance Evaluation</div>
  </div>
  <div class="subject">
    <h5>Marketing Management</h5>
    <div class="unit" onclick="openPDF('mm_unit1.pdf')">Unit 1: Marketing Concepts & Mix</div>
    <div class="unit" onclick="openPDF('mm_unit2.pdf')">Unit 2: Consumer Behavior</div>
    <div class="unit" onclick="openPDF('mm_unit3.pdf')">Unit 3: Product & Brand Management</div>
    <div class="unit" onclick="openPDF('mm_unit4.pdf')">Unit 4: Pricing & Distribution</div>
    <div class="unit" onclick="openPDF('mm_unit5.pdf')">Unit 5: Digital Marketing</div>
  </div>
</div>

<!-- SEMESTER 5 -->
<div class="card-semester">
  <h3>Semester 5</h3>
  <div class="subject">
    <h5>Human Resource Management</h5>
    <div class="unit" onclick="openPDF('hr_unit1.pdf')">Unit 1: HR Planning & Recruitment</div>
    <div class="unit" onclick="openPDF('hr_unit2.pdf')">Unit 2: Training & Development</div>
    <div class="unit" onclick="openPDF('hr_unit3.pdf')">Unit 3: Performance Appraisal</div>
    <div class="unit" onclick="openPDF('hr_unit4.pdf')">Unit 4: Compensation & Benefits</div>
    <div class="unit" onclick="openPDF('hr_unit5.pdf')">Unit 5: Industrial Relations</div>
  </div>
  <div class="subject">
    <h5>Operations & Supply Chain Management</h5>
    <div class="unit" onclick="openPDF('os_unit1.pdf')">Unit 1: Production Planning & Control</div>
    <div class="unit" onclick="openPDF('os_unit2.pdf')">Unit 2: Inventory Management</div>
    <div class="unit" onclick="openPDF('os_unit3.pdf')">Unit 3: Quality Control</div>
    <div class="unit" onclick="openPDF('os_unit4.pdf')">Unit 4: Supply Chain Basics</div>
    <div class="unit" onclick="openPDF('os_unit5.pdf')">Unit 5: Lean & Six Sigma</div>
  </div>
</div>

<!-- SEMESTER 6 -->
<div class="card-semester">
  <h3>Semester 6</h3>
  <div class="subject">
    <h5>Dissertation / Project Work</h5>
    <div class="unit" onclick="openPDF('dp_unit1.pdf')">Unit 1: Topic Selection & Literature Review</div>
    <div class="unit" onclick="openPDF('dp_unit2.pdf')">Unit 2: Research Methodology & Data Collection</div>
    <div class="unit" onclick="openPDF('dp_unit3.pdf')">Unit 3: Data Analysis & Interpretation</div>
    <div class="unit" onclick="openPDF('dp_unit4.pdf')">Unit 4: Report Writing</div>
    <div class="unit" onclick="openPDF('dp_unit5.pdf')">Unit 5: Presentation & Viva Voce</div>
  </div>
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
