<?php 
session_start(); 
include $_SERVER['DOCUMENT_ROOT']."/includes/navbar.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services | DevDussey</title>

<link rel="stylesheet" href="/assets/global.css">
<link rel="stylesheet" href="/assets/services.css">

</head>
<body>

<div class="orbGlow"></div>

<div class="services-wrapper">
  <h1 class="services-title">Services</h1>

  <div class="services-grid">

    <div class="service-card">
      <div class="service-title">Web Development</div>
      <div class="service-text">
        Modern, responsive websites built with professional standards and optimized performance.
      </div>
    </div>

    <div class="service-card">
      <div class="service-title">UI / UX Design</div>
      <div class="service-text">
        Elegant interfaces focused on clean aesthetics, user flow, and great experience.
      </div>
    </div>

    <div class="service-card">
      <div class="service-title">Branding</div>
      <div class="service-text">
        Identity design, typography, colors, and visual consistency to elevate your brand.
      </div>
    </div>

    <div class="service-card">
      <div class="service-title">Maintenance</div>
      <div class="service-text">
        Site updates, bug fixes, optimization, security, and long-term support.
      </div>
    </div>

  </div>
</div>

<footer>© <span id="yr"></span> DevDussey</footer>

<script>
document.getElementById("yr").textContent = new Date().getFullYear();
</script>

</body>
</html>
