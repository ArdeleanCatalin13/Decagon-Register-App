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
    <script defer src="app.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <form class="login-form" action="includes/login.inc.php" method="post">
            <h2>Login</h2>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="input-container">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" placeholder="Enter password">
            </div>
            <button type="submit">Login</button>
        </form>

        <?php
        checkLoginErrors();
        ?>

    </div>
</body>
</html>
