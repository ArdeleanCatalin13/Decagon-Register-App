<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/register_view.inc.php';
require_once 'includes/login_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/7eb3d96340.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>
    <title>Register</title>
</head>
<body>
    <div class="register-container">
        <form class="register-form" id="register-form" action="includes/register.inc.php" method="post">
            <h2>Register</h2>
           
            <?php
            signupInputs();
            ?>

            <button type="submit">Sign Up</button>
        </form>
        <?php
        checkSignupErrors();
        ?>
    </div>
</body>
</html>
