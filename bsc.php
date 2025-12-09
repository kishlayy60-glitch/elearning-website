<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>B.Sc Syllabus — Squad Learning</title>
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

  <h1 class="mb-4">B.Sc (General) — Syllabus (6 Semesters)</h1>

  <!-- SEMESTER 1 -->
  <div class="card-semester">
    <h3>Semester 1</h3>
    <div class="subject">
      <h5>English Communication</h5>
      <div class="unit" onclick="openPDF('Grammar & Vocabulary.pdf')">Unit 1: Grammar & Vocabulary</div>
      <div class="unit" onclick="openPDF('Essay & Report Writing.pdf')">Unit 2: Essay & Report Writing</div>
      <div class="unit" onclick="openPDF('eng_unit3.pdf')">Unit 3: Presentation Skills</div>
      <div class="unit" onclick="openPDF('eng_unit4.pdf')">Unit 4: Comprehension</div>
      <div class="unit" onclick="openPDF('eng_unit5.pdf')">Unit 5: Communication in Science</div>
    </div>
    <div class="subject">
      <h5>Basic Mathematics</h5>
      <div class="unit" onclick="openPDF('math_unit1.pdf')">Unit 1: Algebra</div>
      <div class="unit" onclick="openPDF('math_unit2.pdf')">Unit 2: Trigonometry</div>
      <div class="unit" onclick="openPDF('math_unit3.pdf')">Unit 3: Calculus Basics</div>
      <div class="unit" onclick="openPDF('math_unit4.pdf')">Unit 4: Probability</div>
      <div class="unit" onclick="openPDF('math_unit5.pdf')">Unit 5: Statistics</div>
    </div>
  </div>

  <!-- SEMESTER 2 -->
  <div class="card-semester">
    <h3>Semester 2</h3>
    <div class="subject">
      <h5>Physics — Mechanics</h5>
      <div class="unit" onclick="openPDF('phy_unit1.pdf')">Unit 1: Laws of Motion</div>
      <div class="unit" onclick="openPDF('phy_unit2.pdf')">Unit 2: Work, Energy & Power</div>
      <div class="unit" onclick="openPDF('phy_unit3.pdf')">Unit 3: Rotational Motion</div>
      <div class="unit" onclick="openPDF('phy_unit4.pdf')">Unit 4: Gravitation</div>
      <div class="unit" onclick="openPDF('phy_unit5.pdf')">Unit 5: Oscillations</div>
    </div>
    <div class="subject">
      <h5>Environmental Science</h5>
      <div class="unit" onclick="openPDF('env_unit1.pdf')">Unit 1: Ecosystem</div>
      <div class="unit" onclick="openPDF('env_unit2.pdf')">Unit 2: Biodiversity</div>
      <div class="unit" onclick="openPDF('env_unit3.pdf')">Unit 3: Pollution & Control</div>
      <div class="unit" onclick="openPDF('env_unit4.pdf')">Unit 4: Environmental Laws</div>
      <div class="unit" onclick="openPDF('env_unit5.pdf')">Unit 5: Sustainable Development</div>
    </div>
  </div>

  <!-- SEMESTER 3 -->
  <div class="card-semester">
    <h3>Semester 3</h3>
    <div class="subject">
      <h5>Chemistry — Organic Chemistry</h5>
      <div class="unit" onclick="openPDF('chem_unit1.pdf')">Unit 1: Hydrocarbons</div>
      <div class="unit" onclick="openPDF('chem_unit2.pdf')">Unit 2: Alcohols & Phenols</div>
      <div class="unit" onclick="openPDF('chem_unit3.pdf')">Unit 3: Aldehydes & Ketones</div>
      <div class="unit" onclick="openPDF('chem_unit4.pdf')">Unit 4: Amines</div>
      <div class="unit" onclick="openPDF('chem_unit5.pdf')">Unit 5: Carboxylic Acids</div>
    </div>
    <div class="subject">
      <h5>Computer Applications</h5>
      <div class="unit" onclick="openPDF('ca_unit1.pdf')">Unit 1: MS Office</div>
      <div class="unit" onclick="openPDF('ca_unit2.pdf')">Unit 2: Internet Basics</div>
      <div class="unit" onclick="openPDF('ca_unit3.pdf')">Unit 3: Programming in C</div>
      <div class="unit" onclick="openPDF('ca_unit4.pdf')">Unit 4: Database Concepts</div>
      <div class="unit" onclick="openPDF('ca_unit5.pdf')">Unit 5: Data Analysis</div>
    </div>
  </div>

  <!-- SEMESTER 4 -->
  <div class="card-semester">
    <h3>Semester 4</h3>
    <div class="subject">
      <h5>Botany</h5>
      <div class="unit" onclick="openPDF('bot_unit1.pdf')">Unit 1: Plant Anatomy</div>
      <div class="unit" onclick="openPDF('bot_unit2.pdf')">Unit 2: Plant Physiology</div>
      <div class="unit" onclick="openPDF('bot_unit3.pdf')">Unit 3: Genetics</div>
      <div class="unit" onclick="openPDF('bot_unit4.pdf')">Unit 4: Plant Pathology</div>
      <div class="unit" onclick="openPDF('bot_unit5.pdf')">Unit 5: Ecology</div>
    </div>
    <div class="subject">
      <h5>Zoology</h5>
      <div class="unit" onclick="openPDF('zoo_unit1.pdf')">Unit 1: Animal Diversity</div>
      <div class="unit" onclick="openPDF('zoo_unit2.pdf')">Unit 2: Cell Biology</div>
      <div class="unit" onclick="openPDF('zoo_unit3.pdf')">Unit 3: Human Physiology</div>
      <div class="unit" onclick="openPDF('zoo_unit4.pdf')">Unit 4: Genetics</div>
      <div class="unit" onclick="openPDF('zoo_unit5.pdf')">Unit 5: Evolution</div>
    </div>
  </div>

  <!-- SEMESTER 5 -->
  <div class="card-semester">
    <h3>Semester 5</h3>
    <div class="subject">
      <h5>Advanced Physics</h5>
      <div class="unit" onclick="openPDF('ap_unit1.pdf')">Unit 1: Electricity & Magnetism</div>
      <div class="unit" onclick="openPDF('ap_unit2.pdf')">Unit 2: Thermodynamics</div>
      <div class="unit" onclick="openPDF('ap_unit3.pdf')">Unit 3: Quantum Mechanics</div>
      <div class="unit" onclick="openPDF('ap_unit4.pdf')">Unit 4: Atomic Physics</div>
      <div class="unit" onclick="openPDF('ap_unit5.pdf')">Unit 5: Nuclear Physics</div>
    </div>
    <div class="subject">
      <h5 onclick="openPDF('industrial_chem.pdf')">Industrial Chemistry</h5>
      <div class="unit" onclick="openPDF('ic_unit1.pdf')">Unit 1: Chemical Bonding</div>
      <div class="unit" onclick="openPDF('ic_unit2.pdf')">Unit 2: Coordination Compounds</div>
      <div class="unit" onclick="openPDF('ic_unit3.pdf')">Unit 3: Industrial Polymers</div>
      <div class="unit" onclick="openPDF('ic_unit4.pdf')">Unit 4: Spectroscopy</div>
      <div class="unit" onclick="openPDF('ic_unit5.pdf')">Unit 5: Electrochemistry</div>
    </div>
  </div>

  <!-- SEMESTER 6 -->
  <div class="card-semester">
    <h3>Semester 6</h3>
    <div class="subject">
      <h5>Applied Sciences</h5>
      <div class="unit" onclick="openPDF('as_unit1.pdf')">Unit 1: Biophysics</div>
      <div class="unit" onclick="openPDF('as_unit2.pdf')">Unit 2: Biotechnology</div>
      <div class="unit" onclick="openPDF('as_unit3.pdf')">Unit 3: Environmental Chemistry</div>
      <div class="unit" onclick="openPDF('as_unit4.pdf')">Unit 4: Nanotechnology</div>
      <div class="unit" onclick="openPDF('as_unit5.pdf')">Unit 5: Green Chemistry</div>
    </div>
    <div class="subject">
      <h5>Project & Viva</h5>
      <div class="unit" onclick="openPDF('proj_unit1.pdf')">Unit 1: Project Work</div>
      <div class="unit" onclick="openPDF('proj_unit2.pdf')">Unit 2: Report Writing</div>
      <div class="unit" onclick="openPDF('proj_unit3.pdf')">Unit 3: Seminar Presentation</div>
      <div class="unit" onclick="openPDF('proj_unit4.pdf')">Unit 4: Practical Examination</div>
      <div class="unit" onclick="openPDF('proj_unit5.pdf')">Unit 5: Viva Voce</div>
    </div>
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
