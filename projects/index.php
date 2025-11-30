<?php 
session_start(); 
include $_SERVER['DOCUMENT_ROOT']."/includes/navbar.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Projects | DevDussey</title>

<link rel="stylesheet" href="/assets/global.css">
<link rel="stylesheet" href="/assets/projects.css">

</head>
<body>

<div class="orbGlow"></div>

<div class="projects-wrapper">
  <h1 class="projects-title">Projects</h1>

  <div class="project-list">

    <div class="project-card">
      <h3 class="project-title">Project Name</h3>
      <p class="project-desc">
        Short descriptive text about what the project involved and what it solves.
      </p>
      <a href="#" class="project-link-btn">View Project</a>
    </div>

    <div class="project-card">
      <h3 class="project-title">Another Project</h3>
      <p class="project-desc">
        A feature-rich build with custom design, backend logic, and responsive layout.
      </p>
      <a href="#" class="project-link-btn">View Project</a>
    </div>

    <div class="project-card">
      <h3 class="project-title">Client Showcase</h3>
      <p class="project-desc">
        A polished interface designed for user flow, performance, and clarity.
      </p>
      <a href="#" class="project-link-btn">View Project</a>
    </div>

  </div>
</div>

<footer>© <span id="yr"></span> DevDussey</footer>

<script>
document.getElementById("yr").textContent = new Date().getFullYear();
</script>

</body>
</html>
