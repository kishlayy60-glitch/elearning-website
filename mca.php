<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>MCA Syllabus — Squad Learning</title>
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
<h1 class="mb-4">MCA — Course Syllabus (6 Semesters)</h1>

<!-- SEMESTER 1 -->
<div class="card-semester">
  <h3>Semester 1</h3>
  <div class="subject">
    <h5>Programming in C & C++</h5>
    <div class="unit" onclick="openPDF('Basics of C.pdf')">Unit 1: Basics of C</div>
    <div class="unit" onclick="openPDF('Control Structures.pdf')">Unit 2: Control Structures</div>
    <div class="unit" onclick="openPDF('c_unit3.pdf')">Unit 3: Functions & Arrays</div>
    <div class="unit" onclick="openPDF('c_unit4.pdf')">Unit 4: Pointers & File Handling</div>
    <div class="unit" onclick="openPDF('cpp_unit5.pdf')">Unit 5: Object-Oriented Programming in C++</div>
  </div>
  <div class="subject">
    <h5>Discrete Mathematics</h5>
    <div class="unit" onclick="openPDF('dm_unit1.pdf')">Unit 1: Set Theory & Logic</div>
    <div class="unit" onclick="openPDF('dm_unit2.pdf')">Unit 2: Relations & Functions</div>
    <div class="unit" onclick="openPDF('dm_unit3.pdf')">Unit 3: Graph Theory</div>
    <div class="unit" onclick="openPDF('dm_unit4.pdf')">Unit 4: Combinatorics</div>
    <div class="unit" onclick="openPDF('dm_unit5.pdf')">Unit 5: Boolean Algebra</div>
  </div>
  <div class="subject">
    <h5>Computer Organization & Architecture</h5>
    <div class="unit" onclick="openPDF('coa_unit1.pdf')">Unit 1: Digital Logic Basics</div>
    <div class="unit" onclick="openPDF('coa_unit2.pdf')">Unit 2: CPU Architecture</div>
    <div class="unit" onclick="openPDF('coa_unit3.pdf')">Unit 3: Memory Organization</div>
    <div class="unit" onclick="openPDF('coa_unit4.pdf')">Unit 4: Input/Output Organization</div>
    <div class="unit" onclick="openPDF('coa_unit5.pdf')">Unit 5: Instruction Sets</div>
  </div>
</div>

<!-- SEMESTER 2 -->
<div class="card-semester">
  <h3>Semester 2</h3>
  <div class="subject">
    <h5>Data Structures & Algorithms</h5>
    <div class="unit" onclick="openPDF('ds_unit1.pdf')">Unit 1: Arrays, Stacks, Queues</div>
    <div class="unit" onclick="openPDF('ds_unit2.pdf')">Unit 2: Linked Lists & Trees</div>
    <div class="unit" onclick="openPDF('ds_unit3.pdf')">Unit 3: Graphs & Algorithms</div>
    <div class="unit" onclick="openPDF('ds_unit4.pdf')">Unit 4: Sorting & Searching</div>
    <div class="unit" onclick="openPDF('ds_unit5.pdf')">Unit 5: Complexity Analysis</div>
  </div>
  <div class="subject">
    <h5>Database Management Systems (DBMS)</h5>
    <div class="unit" onclick="openPDF('dbms_unit1.pdf')">Unit 1: ER & Relational Models</div>
    <div class="unit" onclick="openPDF('dbms_unit2.pdf')">Unit 2: SQL & PL/SQL</div>
    <div class="unit" onclick="openPDF('dbms_unit3.pdf')">Unit 3: Normalization</div>
    <div class="unit" onclick="openPDF('dbms_unit4.pdf')">Unit 4: Transactions</div>
    <div class="unit" onclick="openPDF('dbms_unit5.pdf')">Unit 5: Security & Backup</div>
  </div>
  <div class="subject">
    <h5>Operating Systems</h5>
    <div class="unit" onclick="openPDF('os_unit1.pdf')">Unit 1: Process Management</div>
    <div class="unit" onclick="openPDF('os_unit2.pdf')">Unit 2: Memory Management</div>
    <div class="unit" onclick="openPDF('os_unit3.pdf')">Unit 3: File Systems</div>
    <div class="unit" onclick="openPDF('os_unit4.pdf')">Unit 4: Deadlocks</div>
    <div class="unit" onclick="openPDF('os_unit5.pdf')">Unit 5: Scheduling Algorithms</div>
  </div>
</div>

<!-- SEMESTER 3 -->
<div class="card-semester">
  <h3>Semester 3</h3>
  <div class="subject">
    <h5>Software Engineering</h5>
    <div class="unit" onclick="openPDF('se_unit1.pdf')">Unit 1: SDLC</div>
    <div class="unit" onclick="openPDF('se_unit2.pdf')">Unit 2: Requirement Analysis</div>
    <div class="unit" onclick="openPDF('se_unit3.pdf')">Unit 3: Design & Modeling</div>
    <div class="unit" onclick="openPDF('se_unit4.pdf')">Unit 4: Testing & Maintenance</div>
    <div class="unit" onclick="openPDF('se_unit5.pdf')">Unit 5: Agile & DevOps Basics</div>
  </div>
  <div class="subject">
    <h5>Computer Networks</h5>
    <div class="unit" onclick="openPDF('cn_unit1.pdf')">Unit 1: Network Models & Protocols</div>
    <div class="unit" onclick="openPDF('cn_unit2.pdf')">Unit 2: LAN, WAN & Internet</div>
    <div class="unit" onclick="openPDF('cn_unit3.pdf')">Unit 3: TCP/IP & OSI Model</div>
    <div class="unit" onclick="openPDF('cn_unit4.pdf')">Unit 4: Network Security Basics</div>
    <div class="unit" onclick="openPDF('cn_unit5.pdf')">Unit 5: Wireless & Mobile Networks</div>
  </div>
  <div class="subject">
    <h5>Programming in Java</h5>
    <div class="unit" onclick="openPDF('java_unit1.pdf')">Unit 1: Java Basics & OOP</div>
    <div class="unit" onclick="openPDF('java_unit2.pdf')">Unit 2: Exception Handling</div>
    <div class="unit" onclick="openPDF('java_unit3.pdf')">Unit 3: Multithreading</div>
    <div class="unit" onclick="openPDF('java_unit4.pdf')">Unit 4: Collections & Generics</div>
    <div class="unit" onclick="openPDF('java_unit5.pdf')">Unit 5: GUI & Applets</div>
  </div>
</div>

<!-- SEMESTER 4 -->
<div class="card-semester">
  <h3>Semester 4</h3>
  <div class="subject">
    <h5>Advanced Database Systems</h5>
    <div class="unit" onclick="openPDF('adb_unit1.pdf')">Unit 1: Distributed Databases</div>
    <div class="unit" onclick="openPDF('adb_unit2.pdf')">Unit 2: Data Warehousing & Mining</div>
    <div class="unit" onclick="openPDF('adb_unit3.pdf')">Unit 3: NoSQL Databases</div>
    <div class="unit" onclick="openPDF('adb_unit4.pdf')">Unit 4: Big Data Basics</div>
    <div class="unit" onclick="openPDF('adb_unit5.pdf')">Unit 5: Security & Encryption</div>
  </div>
  <div class="subject">
    <h5>Web Technologies</h5>
    <div class="unit" onclick="openPDF('web_unit1.pdf')">Unit 1: HTML, CSS, JavaScript</div>
    <div class="unit" onclick="openPDF('web_unit2.pdf')">Unit 2: Client-Server Architecture</div>
    <div class="unit" onclick="openPDF('web_unit3.pdf')">Unit 3: PHP & ASP.NET</div>
    <div class="unit" onclick="openPDF('web_unit4.pdf')">Unit 4: Web Services & APIs</div>
    <div class="unit" onclick="openPDF('web_unit5.pdf')">Unit 5: Security & Authentication</div>
  </div>
  <div class="subject">
    <h5>Data Analytics & Visualization</h5>
    <div class="unit" onclick="openPDF('da_unit1.pdf')">Unit 1: Data Analysis Basics</div>
    <div class="unit" onclick="openPDF('da_unit2.pdf')">Unit 2: Python for Data Analytics</div>
    <div class="unit" onclick="openPDF('da_unit3.pdf')">Unit 3: Data Visualization Tools</div>
    <div class="unit" onclick="openPDF('da_unit4.pdf')">Unit 4: Statistical Analysis</div>
    <div class="unit" onclick="openPDF('da_unit5.pdf')">Unit 5: Case Studies</div>
  </div>
</div>

<!-- SEMESTER 5 -->
<div class="card-semester">
  <h3>Semester 5</h3>
  <div class="subject">
    <h5>Cloud Computing & IoT</h5>
    <div class="unit" onclick="openPDF('cloud_unit1.pdf')">Unit 1: Cloud Architecture & Services</div>
    <div class="unit" onclick="openPDF('cloud_unit2.pdf')">Unit 2: Virtualization & Storage</div>
    <div class="unit" onclick="openPDF('cloud_unit3.pdf')">Unit 3: IoT Basics</div>
    <div class="unit" onclick="openPDF('cloud_unit4.pdf')">Unit 4: IoT Protocols & Applications</div>
    <div class="unit" onclick="openPDF('cloud_unit5.pdf')">Unit 5: Security & Privacy in IoT</div>
  </div>
  <div class="subject">
    <h5>Artificial Intelligence & Machine Learning</h5>
    <div class="unit" onclick="openPDF('ai_unit1.pdf')">Unit 1: AI Concepts & Search Algorithms</div>
    <div class="unit" onclick="openPDF('ai_unit2.pdf')">Unit 2: Knowledge Representation</div>
    <div class="unit" onclick="openPDF('ai_unit3.pdf')">Unit 3: Machine Learning Basics</div>
    <div class="unit" onclick="openPDF('ai_unit4.pdf')">Unit 4: Supervised & Unsupervised Learning</div>
    <div class="unit" onclick="openPDF('ai_unit5.pdf')">Unit 5: Neural Networks & Deep Learning Basics</div>
  </div>
</div>

<!-- SEMESTER 6 -->
<div class="card-semester">
  <h3>Semester 6</h3>
  <div class="subject">
    <h5>Project Work / Dissertation</h5>
    <div class="unit" onclick="openPDF('proj_unit1.pdf')">Unit 1: Problem Definition & Literature Review</div>
    <div class="unit" onclick="openPDF('proj_unit2.pdf')">Unit 2: System Design & Implementation</div>
    <div class="unit" onclick="openPDF('proj_unit3.pdf')">Unit 3: Testing & Validation</div>
    <div class="unit" onclick="openPDF('proj_unit4.pdf')">Unit 4: Report Writing & Documentation</div>
    <div class="unit" onclick="openPDF('proj_unit5.pdf')">Unit 5: Presentation & Viva</div>
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
