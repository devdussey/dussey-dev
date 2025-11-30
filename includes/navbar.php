<?php session_start(); ?>

<nav class="navbar">
  <div class="nav-container">

    <a href="/" class="nav-logo">DevDussey</a>

    <!-- DESKTOP LINKS -->
    <div class="nav-links desktop-only">
      <a href="/">Home</a>
      <a href="/about/">About</a>
      <a href="/services/">Services</a>
      <a href="/projects/">Projects</a>

      <?php if (isset($_SESSION['admin'])): ?>
        <a href="/admin/">Dashboard</a>
        <a href="/login/logout.php">Logout</a>
      <?php else: ?>
        <a href="/login/">Login</a>
      <?php endif; ?>
    </div>

    <!-- HAMBURGER BUTTON -->
    <div class="hamburger" onclick="toggleMobileMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>

  </div>

  <!-- MOBILE MENU -->
  <div id="mobileMenu" class="mobile-menu">

    <a href="/">Home</a>
    <a href="/about/">About</a>
    <a href="/services/">Services</a>
    <a href="/projects/">Projects</a>

    <?php if (isset($_SESSION['admin'])): ?>
      <a href="/admin/">Dashboard</a>
      <a href="/login/logout.php">Logout</a>
    <?php else: ?>
      <a href="/login/">Login</a>
    <?php endif; ?>

  </div>
</nav>

<script>
function toggleMobileMenu() {
  const menu = document.getElementById("mobileMenu");
  menu.classList.toggle("open");
}
</script>
