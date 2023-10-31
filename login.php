<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script defer src="app.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <form class="login-form" action="profile.php" method="post">
            <h2>Login</h2>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="userlogin" name="userlogin" placeholder="Enter username" onkeyup="validateUsername()" required>
                <span id="error"></span>
            </div>
            <div class="input-container">
                <label id="email-label" for="email">Email</label>
                <input type="email" id="useremail" name="useremail" placeholder="Enter email" onkeyup="validateEmail()" required>
                <span id="email-error"></span>
            </div>
            <div class="input-container">
                <label for="pwd">Password</label>
                <input type="password" id="userpwd" name="userpwd" placeholder="Enter password" required>
                <span id="error"></span>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
