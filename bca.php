<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>BCA Syllabus — Squad Learning</title>
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
    <!-- 🔙 Back Button -->
    <a href="index.php" class="btn btn-danger btn-sm back-btn">⬅ Back</a>
  </div>
</nav>

<main class="container my-5">

  <h1 class="mb-4">BCA Course — Syllabus (8 Semesters)</h1>

  <!-- SEMESTER 1 -->
  <div class="card-semester">
    <h3>Semester 1</h3>
    <div class="subject">
      <h5>Computer Fundamentals & Office Automation</h5>
      <div class="unit" onclick="openPDF('Introduction to Computers.pdf')">Unit 1: Introduction to Computers</div>
      <div class="unit" onclick="openPDF('Input output.pdf')">Unit 2: Input & Output Devices</div>
      <div class="unit" onclick="openPDF('cf_unit3.pdf')">Unit 3: Software & Hardware Basics</div>
      <div class="unit" onclick="openPDF('cf_unit4.pdf')">Unit 4: MS Office</div>
      <div class="unit" onclick="openPDF('cf_unit5.pdf')">Unit 5: Internet & Email</div>
    </div>
    <div class="subject">
      <h5>Programming in C</h5>
      <div class="unit" onclick="openPDF('c_unit1.pdf')">Unit 1: Basics of C Language</div>
      <div class="unit" onclick="openPDF('c_unit2.pdf')">Unit 2: Control Structures</div>
      <div class="unit" onclick="openPDF('c_unit3.pdf')">Unit 3: Functions & Arrays</div>
      <div class="unit" onclick="openPDF('c_unit4.pdf')">Unit 4: Pointers & Strings</div>
      <div class="unit" onclick="openPDF('c_unit5.pdf')">Unit 5: Structures & Files</div>
    </div>
    <div class="subject">
      <h5>Mathematics I</h5>
      <div class="unit" onclick="openPDF('math1_unit1.pdf')">Unit 1: Algebra</div>
      <div class="unit" onclick="openPDF('math1_unit2.pdf')">Unit 2: Trigonometry</div>
      <div class="unit" onclick="openPDF('math1_unit3.pdf')">Unit 3: Calculus</div>
      <div class="unit" onclick="openPDF('math1_unit4.pdf')">Unit 4: Matrices</div>
      <div class="unit" onclick="openPDF('math1_unit5.pdf')">Unit 5: Probability Basics</div>
    </div>
  </div>

  <!-- SEMESTER 2 -->
  <div class="card-semester">
    <h3>Semester 2</h3>
    <div class="subject">
      <h5>Data Structures</h5>
      <div class="unit" onclick="openPDF('ds_unit1.pdf')">Unit 1: Arrays</div>
      <div class="unit" onclick="openPDF('ds_unit2.pdf')">Unit 2: Stacks & Queues</div>
      <div class="unit" onclick="openPDF('ds_unit3.pdf')">Unit 3: Linked Lists</div>
      <div class="unit" onclick="openPDF('ds_unit4.pdf')">Unit 4: Trees</div>
      <div class="unit" onclick="openPDF('ds_unit5.pdf')">Unit 5: Graphs</div>
    </div>
    <div class="subject">
      <h5>Object Oriented Programming with C++</h5>
      <div class="unit" onclick="openPDF('cpp_unit1.pdf')">Unit 1: Classes & Objects</div>
      <div class="unit" onclick="openPDF('cpp_unit2.pdf')">Unit 2: Inheritance</div>
      <div class="unit" onclick="openPDF('cpp_unit3.pdf')">Unit 3: Polymorphism</div>
      <div class="unit" onclick="openPDF('cpp_unit4.pdf')">Unit 4: Templates</div>
      <div class="unit" onclick="openPDF('cpp_unit5.pdf')">Unit 5: File Handling</div>
    </div>
    <div class="subject">
      <h5>Mathematics II</h5>
      <div class="unit" onclick="openPDF('math2_unit1.pdf')">Unit 1: Differential Calculus</div>
      <div class="unit" onclick="openPDF('math2_unit2.pdf')">Unit 2: Integral Calculus</div>
      <div class="unit" onclick="openPDF('math2_unit3.pdf')">Unit 3: Statistics</div>
      <div class="unit" onclick="openPDF('math2_unit4.pdf')">Unit 4: Linear Algebra</div>
      <div class="unit" onclick="openPDF('math2_unit5.pdf')">Unit 5: Probability Distributions</div>
    </div>
  </div>

  <!-- SEMESTER 3 -->
  <div class="card-semester">
    <h3>Semester 3</h3>
    <div class="subject"><h5 onclick="openPDF('dbms.pdf')">Database Management Systems</h5></div>
    <div class="subject"><h5 onclick="openPDF('os.pdf')">Operating Systems</h5></div>
    <div class="subject"><h5 onclick="openPDF('networks.pdf')">Computer Networks</h5></div>
  </div>

  <!-- SEMESTER 4 -->
  <div class="card-semester">
    <h3>Semester 4</h3>
    <div class="subject"><h5 onclick="openPDF('java.pdf')">Java Programming</h5></div>
    <div class="subject"><h5 onclick="openPDF('software_eng.pdf')">Software Engineering</h5></div>
    <div class="subject"><h5 onclick="openPDF('web_tech.pdf')">Web Technologies</h5></div>
  </div>

  <!-- SEMESTER 5 -->
  <div class="card-semester">
    <h3>Semester 5</h3>
    <div class="subject"><h5 onclick="openPDF('python.pdf')">Python Programming</h5></div>
    <div class="subject"><h5 onclick="openPDF('graphics.pdf')">Computer Graphics</h5></div>
    <div class="subject"><h5 onclick="openPDF('elective1.pdf')">Elective I</h5></div>
  </div>

  <!-- SEMESTER 6 -->
  <div class="card-semester">
    <h3>Semester 6</h3>
    <div class="subject"><h5 onclick="openPDF('ai.pdf')">Artificial Intelligence</h5></div>
    <div class="subject"><h5 onclick="openPDF('datamining.pdf')">Data Mining</h5></div>
    <div class="subject"><h5 onclick="openPDF('elective2.pdf')">Elective II</h5></div>
  </div>

  <!-- SEMESTER 7 -->
  <div class="card-semester">
    <h3>Semester 7</h3>
    <div class="subject"><h5 onclick="openPDF('cloud.pdf')">Cloud Computing</h5></div>
    <div class="subject"><h5 onclick="openPDF('bigdata.pdf')">Big Data Analytics</h5></div>
    <div class="subject"><h5 onclick="openPDF('elective3.pdf')">Elective III</h5></div>
  </div>

  <!-- SEMESTER 8 -->
  <div class="card-semester">
    <h3>Semester 8</h3>
    <div class="subject"><h5 onclick="openPDF('project.pdf')">Final Year Project</h5></div>
    <div class="subject"><h5 onclick="openPDF('seminar.pdf')">Seminar & Viva</h5></div>
  </div>

</main>

<script>
function openPDF(filename) {
    window.open("coursepdfs/" + filename, "_blank");
}
</script>

</body>
</html>
