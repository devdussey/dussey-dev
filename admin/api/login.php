<?php
session_start();
require "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $db->prepare("SELECT * FROM admins WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['admin'] = $user['id'];
    header("Location: /admin/");
    exit;
}

header("Location: /admin/login.php?error=1");
exit;
