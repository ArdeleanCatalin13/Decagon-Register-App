<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/7eb3d96340.js" crossorigin="anonymous"></script>
    <script defer src="login.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <form class="login-form" id="login-form" action="includes/login.inc.php" method="post">
            <h2>Login</h2>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username">
                <i class="fa-solid fa-circle-check fa-lg" style="color: #16b913;"></i>
                <i class="fa-solid fa-circle-exclamation fa-lg" style="color: #ca0c0c;"></i>
                <small>Error Message</small>
            </div>
            <div class="input-container">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" placeholder="Enter password">
                <i class="fa-solid fa-circle-check fa-lg" style="color: #16b913;"></i>
                <i class="fa-solid fa-circle-exclamation fa-lg" style="color: #ca0c0c;"></i>
                <small>Error Message</small>
            </div>
            <button type="submit">Login</button>
        </form>

        <?php
        checkLoginErrors();
        ?>

    </div>
</body>
</html>
