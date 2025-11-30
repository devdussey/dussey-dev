<?php 
session_start();
include $_SERVER['DOCUMENT_ROOT']."/includes/navbar.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>DevDussey | dussey.dev</title>

<link rel="stylesheet" href="/assets/global.css">
<link rel="stylesheet" href="/assets/landing.css">

</head>
<body>

<div class="orbGlow"></div>

<div class="wrapper">
  <div class="cmd">C:\DevDussey&gt;<span class="cursor">_</span></div>
  <div class="sub">Design &nbsp;|&nbsp; Development &nbsp;|&nbsp; Delivery</div>

  <section class="skills">
    <h2 class="skills-heading">Toolbox</h2>
    <div class="skills-grid">
      <button class="skill-chip" data-tooltip="Markup for crafting web pages.">HTML</button>
      <button class="skill-chip" data-tooltip="Styling responsive, accessible layouts.">CSS</button>
      <button class="skill-chip" data-tooltip="Interactive, dynamic front-end experiences.">JavaScript</button>
      <button class="skill-chip" data-tooltip="Server-side logic and APIs.">PHP</button>
      <button class="skill-chip" data-tooltip="Modern PHP framework for clean backends.">Laravel</button>
      <button class="skill-chip" data-tooltip="Reusable UI components for the web.">React</button>
      <button class="skill-chip" data-tooltip="Scalable services and tooling with JS runtimes.">Node.js</button>
      <button class="skill-chip" data-tooltip="Containerized builds and deployments.">Docker</button>
      <button class="skill-chip" data-tooltip="Relational data modeling and queries.">MySQL</button>
      <button class="skill-chip" data-tooltip="Cloud-native hosting, storage, and monitoring.">AWS</button>
    </div>
  </section>
</div>

<div class="quick-links">
  <a href="/wordhex/">wordhex</a>
  <a href="/login/">workspace</a>
</div>

<footer>
  © <span id="yr"></span> DevDussey
</footer>

<script src="/assets/landing.js"></script>
</body>
</html>
