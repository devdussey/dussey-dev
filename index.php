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
