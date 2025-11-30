<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Admin Login | DevDussey</title>

<?php if (isset($_GET['error'])): ?>
  <div style="color:#f88; margin-bottom:15px; font-size:14px;">
    Invalid username or password.
  </div>
<?php endif; ?>

<style>
  html, body {
    margin:0;
    padding:0;
    width:100%;
    height:100%;
    font-family: Consolas, monospace;
    background: url("/assets/Background.png") center/cover no-repeat fixed;
    color:#ffffff;
    display:flex;
    justify-content:center;
    align-items:center;
  }

  .login-box {
    backdrop-filter: blur(6px);
    padding: 40px 45px;
    border-radius: 10px;
    text-align:center;
    background: rgba(0,0,0,0.45);
    box-shadow: 0 0 25px rgba(0,0,0,0.4);
    width: clamp(280px, 60vw, 400px);
  }

  .title {
    font-size: clamp(24px, 5vw, 32px);
    margin-bottom: 25px;
    text-shadow:0 0 10px rgba(255,255,255,0.35);
  }

  input {
    width:100%;
    padding:12px 14px;
    font-size:16px;
    border:none;
    border-radius:6px;
    margin-bottom:15px;
    outline:none;
    background:#1b1b1b;
    color:#fff;
    box-shadow: inset 0 0 10px rgba(0,0,0,0.4);
  }

  button {
    width:100%;
    padding:12px 14px;
    font-size:18px;
    background:#008cff;
    color:#fff;
    border:none;
    border-radius:6px;
    cursor:pointer;
    transition:0.25s;
  }

  button:hover {
    background:#0a9aff;
    box-shadow:0 0 18px rgba(0,140,255,0.7);
  }

  .orbGlow {
    position:fixed;
    top:0;left:0;right:0;bottom:0;
    pointer-events:none;
    background: radial-gradient(circle at 50% 55%, rgba(0,140,255,0.25), transparent 70%);
    mix-blend-mode:screen;
    animation: orbPulse 5s ease-in-out infinite;
  }

  @keyframes orbPulse {
    0% { opacity:0.20; }
    50% { opacity:0.45; }
    100% { opacity:0.20; }
  }

  footer {
    position:fixed;
    bottom:15px;
    width:100%;
    text-align:center;
    font-size:14px;
    opacity:0.55;
  }
</style>
</head>
<body>

<div class="orbGlow"></div>

<div class="login-box">
  <div class="title">Admin Login</div>

  <form method="POST" action="/login/auth.php">
    <input type="text" name="username" placeholder="Username" autocomplete="off" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">LOGIN</button>
  </form>
</div>

<footer>
  © <span id="yr"></span> DevDussey
</footer>

<script>
document.getElementById("yr").textContent = new Date().getFullYear();
</script>

</body>
</html>
