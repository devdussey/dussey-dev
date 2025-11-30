<?php
session_start();

/* -----------------------------
   ADMIN CREDENTIALS  
   Change these to your own.
------------------------------*/
$ADMIN_USER = "devdussey";
$ADMIN_PASS = "Holly.2025!"; 
// You can change this anytime.

// OPTIONAL: Use a hashed password instead:
// $ADMIN_PASS_HASH = password_hash("yourStrongPassword123", PASSWORD_DEFAULT);


/* -----------------------------
   Handle Form Submission
------------------------------*/
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $ADMIN_USER && $password === $ADMIN_PASS) {
    
    // Store user session
    $_SESSION['admin'] = [
        "username" => $ADMIN_USER,
        "login_time" => time()
    ];

    // Redirect to admin dashboard
    header("Location: /admin/");
    exit;
}

// If login failed:
header("Location: /login/?error=1");
exit;
?>
