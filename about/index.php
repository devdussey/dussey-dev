<?php 
session_start(); 
include $_SERVER['DOCUMENT_ROOT']."/includes/navbar.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About | DevDussey</title>

<link rel="stylesheet" href="/assets/global.css">
<link rel="stylesheet" href="/assets/about.css">

</head>
<body>

<div class="orbGlow"></div>

<div class="page-wrapper">
  <h1 class="page-title">About Me</h1>
  <p class="page-sub">
    Crafting modern digital solutions with precision, passion, and purpose.  
    At DevDussey, I focus on building clean, fast, scalable experiences that blend  
    elegant visuals with strong functionality.
  </p>
</div>

<footer>© <span id="yr"></span> DevDussey</footer>

<script>
document.getElementById("yr").textContent = new Date().getFullYear();
</script>

</body>
</html>
