<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>MSc Syllabus — Squad Learning</title>
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
<script>
function openPDF(file) {
    window.open(file, "_blank");
}
</script>
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

<!-- ====================== MSc Mathematics ====================== -->
<h1 class="mb-4">MSc Mathematics — Syllabus (6 Semesters)</h1>

<!-- SEMESTER 1 -->
<div class="card-semester">
  <h3>Semester 1</h3>
  <div class="subject">
    <h5>Advanced Algebra</h5>
    <div class="unit" onclick="openPDF('GroupsRingsFields.pdf')">Unit 1: Groups, Rings, and Fields</div>
    <div class="unit" onclick="openPDF('math_adv_algebra_unit2.pdf')">Unit 2: Modules and Vector Spaces</div>
    <div class="unit" onclick="openPDF('math_adv_algebra_unit3.pdf')">Unit 3: Linear Transformations</div>
    <div class="unit" onclick="openPDF('math_adv_algebra_unit4.pdf')">Unit 4: Eigenvalues and Eigenvectors</div>
    <div class="unit" onclick="openPDF('math_adv_algebra_unit5.pdf')">Unit 5: Canonical Forms</div>
  </div>
  <div class="subject">
    <h5>Real Analysis</h5>
    <div class="unit" onclick="openPDF('math_real_analysis_unit1.pdf')">Unit 1: Metric Spaces</div>
    <div class="unit" onclick="openPDF('math_real_analysis_unit2.pdf')">Unit 2: Sequences and Series</div>
    <div class="unit" onclick="openPDF('math_real_analysis_unit3.pdf')">Unit 3: Continuity and Differentiability</div>
    <div class="unit" onclick="openPDF('math_real_analysis_unit4.pdf')">Unit 4: Riemann-Stieltjes Integral</div>
    <div class="unit" onclick="openPDF('math_real_analysis_unit5.pdf')">Unit 5: Uniform Convergence</div>
  </div>
</div>

<!-- SEMESTER 2 -->
<div class="card-semester">
  <h3>Semester 2</h3>
  <div class="subject">
    <h5>Complex Analysis</h5>
    <div class="unit" onclick="openPDF('math_complex_analysis_unit1.pdf')">Unit 1: Analytic Functions</div>
    <div class="unit" onclick="openPDF('math_complex_analysis_unit2.pdf')">Unit 2: Cauchy-Riemann Equations</div>
    <div class="unit" onclick="openPDF('math_complex_analysis_unit3.pdf')">Unit 3: Complex Integration</div>
    <div class="unit" onclick="openPDF('math_complex_analysis_unit4.pdf')">Unit 4: Cauchy's Theorem & Integral Formula</div>
    <div class="unit" onclick="openPDF('math_complex_analysis_unit5.pdf')">Unit 5: Residue Theorem & Applications</div>
  </div>
  <div class="subject">
    <h5>Functional Analysis</h5>
    <div class="unit" onclick="openPDF('math_functional_analysis_unit1.pdf')">Unit 1: Normed Linear Spaces</div>
    <div class="unit" onclick="openPDF('math_functional_analysis_unit2.pdf')">Unit 2: Banach and Hilbert Spaces</div>
    <div class="unit" onclick="openPDF('math_functional_analysis_unit3.pdf')">Unit 3: Linear Operators</div>
    <div class="unit" onclick="openPDF('math_functional_analysis_unit4.pdf')">Unit 4: Spectral Theory</div>
    <div class="unit" onclick="openPDF('math_functional_analysis_unit5.pdf')">Unit 5: Applications in PDEs</div>
  </div>
</div>

<!-- SEMESTER 3 -->
<div class="card-semester">
  <h3>Semester 3</h3>
  <div class="subject">
    <h5>Partial Differential Equations</h5>
    <div class="unit" onclick="openPDF('math_pde_unit1.pdf')">Unit 1: First Order PDEs</div>
    <div class="unit" onclick="openPDF('math_pde_unit2.pdf')">Unit 2: Higher Order Linear PDEs</div>
    <div class="unit" onclick="openPDF('math_pde_unit3.pdf')">Unit 3: Separation of Variables</div>
    <div class="unit" onclick="openPDF('math_pde_unit4.pdf')">Unit 4: Fourier Series Solutions</div>
    <div class="unit" onclick="openPDF('math_pde_unit5.pdf')">Unit 5: Boundary Value Problems</div>
  </div>
  <div class="subject">
    <h5>Advanced Algebra</h5>
    <div class="unit" onclick="openPDF('math_adv_algebra2_unit1.pdf')">Unit 1: Galois Theory</div>
    <div class="unit" onclick="openPDF('math_adv_algebra2_unit2.pdf')">Unit 2: Field Extensions</div>
    <div class="unit" onclick="openPDF('math_adv_algebra2_unit3.pdf')">Unit 3: Solvability by Radicals</div>
    <div class="unit" onclick="openPDF('math_adv_algebra2_unit4.pdf')">Unit 4: Module Theory</div>
    <div class="unit" onclick="openPDF('math_adv_algebra2_unit5.pdf')">Unit 5: Homological Algebra Basics</div>
  </div>
</div>

<!-- SEMESTER 4 -->
<div class="card-semester">
  <h3>Semester 4</h3>
  <div class="subject">
    <h5>Numerical Analysis & Computational Methods</h5>
    <div class="unit" onclick="openPDF('math_numerical_unit1.pdf')">Unit 1: Numerical Solutions of Equations</div>
    <div class="unit" onclick="openPDF('math_numerical_unit2.pdf')">Unit 2: Interpolation and Extrapolation</div>
    <div class="unit" onclick="openPDF('math_numerical_unit3.pdf')">Unit 3: Numerical Differentiation & Integration</div>
    <div class="unit" onclick="openPDF('math_numerical_unit4.pdf')">Unit 4: Numerical Solutions of ODEs & PDEs</div>
    <div class="unit" onclick="openPDF('math_numerical_unit5.pdf')">Unit 5: Error Analysis</div>
  </div>
  <div class="subject">
    <h5>Mathematical Statistics</h5>
    <div class="unit" onclick="openPDF('math_statistics_unit1.pdf')">Unit 1: Probability Theory</div>
    <div class="unit" onclick="openPDF('math_statistics_unit2.pdf')">Unit 2: Random Variables & Distributions</div>
    <div class="unit" onclick="openPDF('math_statistics_unit3.pdf')">Unit 3: Estimation Theory</div>
    <div class="unit" onclick="openPDF('math_statistics_unit4.pdf')">Unit 4: Hypothesis Testing</div>
    <div class="unit" onclick="openPDF('math_statistics_unit5.pdf')">Unit 5: Regression & Correlation</div>
  </div>
</div>

<!-- SEMESTER 5 -->
<div class="card-semester">
  <h3>Semester 5</h3>
  <div class="subject">
    <h5>Topology</h5>
    <div class="unit" onclick="openPDF('math_topology_unit1.pdf')">Unit 1: Open & Closed Sets</div>
    <div class="unit" onclick="openPDF('math_topology_unit2.pdf')">Unit 2: Basis for a Topology</div>
    <div class="unit" onclick="openPDF('math_topology_unit3.pdf')">Unit 3: Continuous Functions & Homeomorphisms</div>
    <div class="unit" onclick="openPDF('math_topology_unit4.pdf')">Unit 4: Connectedness & Compactness</div>
    <div class="unit" onclick="openPDF('math_topology_unit5.pdf')">Unit 5: Metric Spaces</div>
  </div>
  <div class="subject">
    <h5>Advanced Differential Equations</h5>
    <div class="unit" onclick="openPDF('math_adv_de_unit1.pdf')">Unit 1: Nonlinear Differential Equations</div>
    <div class="unit" onclick="openPDF('math_adv_de_unit2.pdf')">Unit 2: Stability Theory</div>
    <div class="unit" onclick="openPDF('math_adv_de_unit3.pdf')">Unit 3: Phase Plane Analysis</div>
    <div class="unit" onclick="openPDF('math_adv_de_unit4.pdf')">Unit 4: Perturbation Methods</div>
    <div class="unit" onclick="openPDF('math_adv_de_unit5.pdf')">Unit 5: Applications in Physics & Engineering</div>
  </div>
</div>

<!-- SEMESTER 6 -->
<div class="card-semester">
  <h3>Semester 6</h3>
  <div class="subject">
    <h5>Operations Research / Optimization Techniques</h5>
    <div class="unit" onclick="openPDF('math_operations_research_unit1.pdf')">Unit 1: Linear Programming</div>
    <div class="unit" onclick="openPDF('math_operations_research_unit2.pdf')">Unit 2: Simplex Method</div>
    <div class="unit" onclick="openPDF('math_operations_research_unit3.pdf')">Unit 3: Transportation & Assignment Problems</div>
    <div class="unit" onclick="openPDF('math_operations_research_unit4.pdf')">Unit 4: Game Theory</div>
    <div class="unit" onclick="openPDF('math_operations_research_unit5.pdf')">Unit 5: Queuing Theory & Applications</div>
  </div>
  <div class="subject">
    <h5>Research Project / Dissertation</h5>
    <div class="unit" onclick="openPDF('math_research_project_unit1.pdf')">Unit 1: Topic Selection</div>
    <div class="unit" onclick="openPDF('math_research_project_unit2.pdf')">Unit 2: Literature Review</div>
    <div class="unit" onclick="openPDF('math_research_project_unit3.pdf')">Unit 3: Methodology & Tools</div>
    <div class="unit" onclick="openPDF('math_research_project_unit4.pdf')">Unit 4: Data Analysis & Interpretation</div>
    <div class="unit" onclick="openPDF('math_research_project_unit5.pdf')">Unit 5: Report Writing & Presentation</div>
  </div>
</div>

<!-- ====================== MSc Physics ====================== -->
<h1 class="mb-4">MSc Physics — Syllabus (6 Semesters)</h1>

<!-- SEMESTER 1 -->
<div class="card-semester">
  <h3>Semester 1</h3>
  <div class="subject">
    <h5>Classical Mechanics</h5>
    <div class="unit" onclick="openPDF('phys_classical_mechanics_unit1.pdf')">Unit 1: Lagrangian Formulation</div>
    <div class="unit" onclick="openPDF('phys_classical_mechanics_unit2.pdf')">Unit 2: Hamiltonian Formulation</div>
    <div class="unit" onclick="openPDF('phys_classical_mechanics_unit3.pdf')">Unit 3: Central Force Problems</div>
    <div class="unit" onclick="openPDF('phys_classical_mechanics_unit4.pdf')">Unit 4: Small Oscillations</div>
    <div class="unit" onclick="openPDF('phys_classical_mechanics_unit5.pdf')">Unit 5: Rigid Body Dynamics</div>
  </div>
  <div class="subject">
    <h5>Mathematical Methods I</h5>
    <div class="unit" onclick="openPDF('phys_math_methods1_unit1.pdf')">Unit 1: Vector Analysis</div>
    <div class="unit" onclick="openPDF('phys_math_methods1_unit2.pdf')">Unit 2: Tensor Analysis</div>
    <div class="unit" onclick="openPDF('phys_math_methods1_unit3.pdf')">Unit 3: Fourier Series</div>
    <div class="unit" onclick="openPDF('phys_math_methods1_unit4.pdf')">Unit 4: Laplace Transforms</div>
    <div class="unit" onclick="openPDF('phys_math_methods1_unit5.pdf')">Unit 5: Green's Functions</div>
  </div>
</div>

<!-- SEMESTER 2 -->
<div class="card-semester">
  <h3>Semester 2</h3>
  <div class="subject">
    <h5>Electrodynamics</h5>
    <div class="unit" onclick="openPDF('phys_electrodynamics_unit1.pdf')">Unit 1: Maxwell's Equations</div>
    <div class="unit" onclick="openPDF('phys_electrodynamics_unit2.pdf')">Unit 2: Electrostatics & Magnetostatics</div>
    <div class="unit" onclick="openPDF('phys_electrodynamics_unit3.pdf')">Unit 3: Electromagnetic Waves</div>
    <div class="unit" onclick="openPDF('phys_electrodynamics_unit4.pdf')">Unit 4: Poynting Theorem</div>
    <div class="unit" onclick="openPDF('phys_electrodynamics_unit5.pdf')">Unit 5: Radiation from Moving Charges</div>
  </div>
  <div class="subject">
    <h5>Quantum Mechanics I</h5>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics1_unit1.pdf')">Unit 1: Schrodinger Equation</div>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics1_unit2.pdf')">Unit 2: Particle in a Box</div>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics1_unit3.pdf')">Unit 3: Harmonic Oscillator</div>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics1_unit4.pdf')">Unit 4: Angular Momentum</div>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics1_unit5.pdf')">Unit 5: Hydrogen Atom</div>
  </div>
</div>

<!-- SEMESTER 3 -->
<div class="card-semester">
  <h3>Semester 3</h3>
  <div class="subject">
    <h5>Statistical Mechanics</h5>
    <div class="unit" onclick="openPDF('phys_statistical_mechanics_unit1.pdf')">Unit 1: Thermodynamic Potentials</div>
    <div class="unit" onclick="openPDF('phys_statistical_mechanics_unit2.pdf')">Unit 2: Canonical Ensemble</div>
    <div class="unit" onclick="openPDF('phys_statistical_mechanics_unit3.pdf')">Unit 3: Microcanonical & Grand Canonical Ensemble</div>
    <div class="unit" onclick="openPDF('phys_statistical_mechanics_unit4.pdf')">Unit 4: Quantum Statistics</div>
    <div class="unit" onclick="openPDF('phys_statistical_mechanics_unit5.pdf')">Unit 5: Bose-Einstein & Fermi-Dirac Distribution</div>
  </div>
  <div class="subject">
    <h5>Quantum Mechanics II</h5>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics2_unit1.pdf')">Unit 1: Perturbation Theory</div>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics2_unit2.pdf')">Unit 2: Variational Method</div>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics2_unit3.pdf')">Unit 3: Spin & Pauli Matrices</div>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics2_unit4.pdf')">Unit 4: Identical Particles</div>
    <div class="unit" onclick="openPDF('phys_quantum_mechanics2_unit5.pdf')">Unit 5: Scattering Theory</div>
  </div>
</div>

<!-- SEMESTER 4 -->
<div class="card-semester">
  <h3>Semester 4</h3>
  <div class="subject">
    <h5>Solid State Physics</h5>
    <div class="unit" onclick="openPDF('phys_solid_state_physics_unit1.pdf')">Unit 1: Crystal Structures</div>
    <div class="unit" onclick="openPDF('phys_solid_state_physics_unit2.pdf')">Unit 2: X-ray Diffraction</div>
    <div class="unit" onclick="openPDF('phys_solid_state_physics_unit3.pdf')">Unit 3: Band Theory</div>
    <div class="unit" onclick="openPDF('phys_solid_state_physics_unit4.pdf')">Unit 4: Semiconductors</div>
    <div class="unit" onclick="openPDF('phys_solid_state_physics_unit5.pdf')">Unit 5: Superconductivity</div>
  </div>
  <div class="subject">
    <h5>Nuclear & Particle Physics</h5>
    <div class="unit" onclick="openPDF('phys_nuclear_physics_unit1.pdf')">Unit 1: Nuclear Models</div>
    <div class="unit" onclick="openPDF('phys_nuclear_physics_unit2.pdf')">Unit 2: Radioactivity</div>
    <div class="unit" onclick="openPDF('phys_nuclear_physics_unit3.pdf')">Unit 3: Nuclear Reactions</div>
    <div class="unit" onclick="openPDF('phys_nuclear_physics_unit4.pdf')">Unit 4: Particle Physics Basics</div>
    <div class="unit" onclick="openPDF('phys_nuclear_physics_unit5.pdf')">Unit 5: Detectors</div>
  </div>
</div>

<!-- SEMESTER 5 -->
<div class="card-semester">
  <h3>Semester 5</h3>
  <div class="subject">
    <h5>Optics & Photonics</h5>
    <div class="unit" onclick="openPDF('phys_optics_unit1.pdf')">Unit 1: Interference & Diffraction</div>
    <div class="unit" onclick="openPDF('phys_optics_unit2.pdf')">Unit 2: Polarization</div>
    <div class="unit" onclick="openPDF('phys_optics_unit3.pdf')">Unit 3: Lasers</div>
    <div class="unit" onclick="openPDF('phys_optics_unit4.pdf')">Unit 4: Optical Fibers</div>
    <div class="unit" onclick="openPDF('phys_optics_unit5.pdf')">Unit 5: Nonlinear Optics</div>
  </div>
  <div class="subject">
    <h5>Advanced Laboratory Techniques</h5>
    <div class="unit" onclick="openPDF('phys_advanced_lab_unit1.pdf')">Unit 1: Experimental Design</div>
    <div class="unit" onclick="openPDF('phys_advanced_lab_unit2.pdf')">Unit 2: Data Acquisition</div>
    <div class="unit" onclick="openPDF('phys_advanced_lab_unit3.pdf')">Unit 3: Error Analysis</div>
    <div class="unit" onclick="openPDF('phys_advanced_lab_unit4.pdf')">Unit 4: Signal Processing</div>
    <div class="unit" onclick="openPDF('phys_advanced_lab_unit5.pdf')">Unit 5: Scientific Reporting</div>
  </div>
</div>

<!-- SEMESTER 6 -->
<div class="card-semester">
  <h3>Semester 6</h3>
  <div class="subject">
    <h5>Research Project / Dissertation</h5>
    <div class="unit" onclick="openPDF('phys_research_project_unit1.pdf')">Unit 1: Topic Selection</div>
    <div class="unit" onclick="openPDF('phys_research_project_unit2.pdf')">Unit 2: Literature Review</div>
    <div class="unit" onclick="openPDF('phys_research_project_unit3.pdf')">Unit 3: Methodology & Experimental Design</div>
    <div class="unit" onclick="openPDF('phys_research_project_unit4.pdf')">Unit 4: Data Analysis & Interpretation</div>
    <div class="unit" onclick="openPDF('phys_research_project_unit5.pdf')">Unit 5: Report Writing & Presentation</div>
  </div>
</div>

<!-- ====================== MSc Chemistry ====================== -->
<h1 class="mb-4">MSc Chemistry — Syllabus (6 Semesters)</h1>

<!-- SEMESTER 1 -->
<div class="card-semester">
  <h3>Semester 1</h3>
  <div class="subject">
    <h5>Physical Chemistry I</h5>
    <div class="unit" onclick="openPDF('chem_physical_chemistry1_unit1.pdf')">Unit 1: Thermodynamics</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry1_unit2.pdf')">Unit 2: Kinetics</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry1_unit3.pdf')">Unit 3: Chemical Equilibrium</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry1_unit4.pdf')">Unit 4: Phase Equilibria</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry1_unit5.pdf')">Unit 5: Surface Chemistry</div>
  </div>
  <div class="subject">
    <h5>Organic Chemistry I</h5>
    <div class="unit" onclick="openPDF('chem_organic_chemistry1_unit1.pdf')">Unit 1: Structure & Bonding</div>
    <div class="unit" onclick="openPDF('chem_organic_chemistry1_unit2.pdf')">Unit 2: Stereochemistry</div>
    <div class="unit" onclick="openPDF('chem_organic_chemistry1_unit3.pdf')">Unit 3: Reaction Mechanisms</div>
    <div class="unit" onclick="openPDF('chem_organic_chemistry1_unit4.pdf')">Unit 4: Alkanes & Alkenes</div>
    <div class="unit" onclick="openPDF('chem_organic_chemistry1_unit5.pdf')">Unit 5: Functional Groups</div>
  </div>
</div>

<!-- SEMESTER 2 -->
<div class="card-semester">
  <h3>Semester 2</h3>
  <div class="subject">
    <h5>Inorganic Chemistry I</h5>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry1_unit1.pdf')">Unit 1: Atomic Structure</div>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry1_unit2.pdf')">Unit 2: Chemical Bonding</div>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry1_unit3.pdf')">Unit 3: Coordination Compounds</div>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry1_unit4.pdf')">Unit 4: Crystal Field Theory</div>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry1_unit5.pdf')">Unit 5: Magnetic & Spectral Properties</div>
  </div>
  <div class="subject">
    <h5>Physical Chemistry II</h5>
    <div class="unit" onclick="openPDF('chem_physical_chemistry2_unit1.pdf')">Unit 1: Quantum Chemistry</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry2_unit2.pdf')">Unit 2: Molecular Spectroscopy</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry2_unit3.pdf')">Unit 3: Statistical Thermodynamics</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry2_unit4.pdf')">Unit 4: Electrochemistry</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry2_unit5.pdf')">Unit 5: Chemical Kinetics</div>
  </div>
</div>

<!-- SEMESTER 3 -->
<div class="card-semester">
  <h3>Semester 3</h3>
  <div class="subject">
    <h5>Organic Chemistry II</h5>
    <div class="unit" onclick="openPDF('chem_organic_chemistry2_unit1.pdf')">Unit 1: Aromatic Compounds</div>
    <div class="unit" onclick="openPDF('chem_organic_chemistry2_unit2.pdf')">Unit 2: Carbonyl Compounds</div>
    <div class="unit" onclick="openPDF('chem_organic_chemistry2_unit3.pdf')">Unit 3: Heterocyclic Compounds</div>
    <div class="unit" onclick="openPDF('chem_organic_chemistry2_unit4.pdf')">Unit 4: Organic Synthesis</div>
    <div class="unit" onclick="openPDF('chem_organic_chemistry2_unit5.pdf')">Unit 5: Spectroscopic Methods</div>
  </div>
  <div class="subject">
    <h5>Inorganic Chemistry II</h5>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry2_unit1.pdf')">Unit 1: Transition Metals</div>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry2_unit2.pdf')">Unit 2: Organometallics</div>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry2_unit3.pdf')">Unit 3: Bioinorganic Chemistry</div>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry2_unit4.pdf')">Unit 4: Solid State Chemistry</div>
    <div class="unit" onclick="openPDF('chem_inorganic_chemistry2_unit5.pdf')">Unit 5: Lanthanides & Actinides</div>
  </div>
</div>

<!-- SEMESTER 4 -->
<div class="card-semester">
  <h3>Semester 4</h3>
  <div class="subject">
    <h5>Physical Chemistry III</h5>
    <div class="unit" onclick="openPDF('chem_physical_chemistry3_unit1.pdf')">Unit 1: Spectroscopy</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry3_unit2.pdf')">Unit 2: Photochemistry</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry3_unit3.pdf')">Unit 3: Quantum Chemistry</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry3_unit4.pdf')">Unit 4: Statistical Mechanics</div>
    <div class="unit" onclick="openPDF('chem_physical_chemistry3_unit5.pdf')">Unit 5: Surface Chemistry</div>
  </div>
  <div class="subject">
    <h5>Analytical Chemistry</h5>
    <div class="unit" onclick="openPDF('chem_analytical_chemistry_unit1.pdf')">Unit 1: Qualitative Analysis</div>
    <div class="unit" onclick="openPDF('chem_analytical_chemistry_unit2.pdf')">Unit 2: Quantitative Analysis</div>
    <div class="unit" onclick="openPDF('chem_analytical_chemistry_unit3.pdf')">Unit 3: Chromatography</div>
    <div class="unit" onclick="openPDF('chem_analytical_chemistry_unit4.pdf')">Unit 4: Spectroscopic Techniques</div>
    <div class="unit" onclick="openPDF('chem_analytical_chemistry_unit5.pdf')">Unit 5: Electroanalytical Methods</div>
  </div>
</div>

<!-- SEMESTER 5 -->
<div class="card-semester">
  <h3>Semester 5</h3>
  <div class="subject">
    <h5>Advanced Organic Chemistry</h5>
    <div class="unit" onclick="openPDF('chem_advanced_organic_unit1.pdf')">Unit 1: Reaction Mechanisms</div>
    <div class="unit" onclick="openPDF('chem_advanced_organic_unit2.pdf')">Unit 2: Organometallic Reagents</div>
    <div class="unit" onclick="openPDF('chem_advanced_organic_unit3.pdf')">Unit 3: Pericyclic Reactions</div>
    <div class="unit" onclick="openPDF('chem_advanced_organic_unit4.pdf')">Unit 4: Stereochemistry & Asymmetric Synthesis</div>
    <div class="unit" onclick="openPDF('chem_advanced_organic_unit5.pdf')">Unit 5: Spectroscopic Analysis</div>
  </div>
  <div class="subject">
    <h5>Advanced Inorganic Chemistry</h5>
    <div class="unit" onclick="openPDF('chem_advanced_inorganic_unit1.pdf')">Unit 1: Coordination Chemistry</div>
    <div class="unit" onclick="openPDF('chem_advanced_inorganic_unit2.pdf')">Unit 2: Bioinorganic Chemistry</div>
    <div class="unit" onclick="openPDF('chem_advanced_inorganic_unit3.pdf')">Unit 3: Organometallics</div>
    <div class="unit" onclick="openPDF('chem_advanced_inorganic_unit4.pdf')">Unit 4: Solid State Chemistry</div>
    <div class="unit" onclick="openPDF('chem_advanced_inorganic_unit5.pdf')">Unit 5: Lanthanide & Actinide Chemistry</div>
  </div>
</div>

<!-- SEMESTER 6 -->
<div class="card-semester">
  <h3>Semester 6</h3>
  <div class="subject">
    <h5>Research Project / Dissertation</h5>
    <div class="unit" onclick="openPDF('chem_research_project_unit1.pdf')">Unit 1: Topic Selection</div>
    <div class="unit" onclick="openPDF('chem_research_project_unit2.pdf')">Unit 2: Literature Review</div>
    <div class="unit" onclick="openPDF('chem_research_project_unit3.pdf')">Unit 3: Experimental Design & Methods</div>
    <div class="unit" onclick="openPDF('chem_research_project_unit4.pdf')">Unit 4: Data Analysis & Interpretation</div>
    <div class="unit" onclick="openPDF('chem_research_project_unit5.pdf')">Unit 5: Report Writing & Presentation</div>
  </div>
</div>

</main>

<footer>
  &copy; 2025 Squad Learning. All Rights Reserved.
</footer>
<script>
function openPDF(filename) {
    window.open("coursepdfs/" + filename, "_blank");
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
