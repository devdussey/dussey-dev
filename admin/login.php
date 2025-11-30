<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: /admin/");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/global.css">
<link rel="stylesheet" href="/admin/css/admin.css">
<title>Admin Login</title>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>

    <form method="POST" action="/admin/api/login.php">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

</div>

</body>
</html>
