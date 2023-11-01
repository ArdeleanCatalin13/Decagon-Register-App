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
    <script defer src="app.js"></script>
    <title>Register</title>
</head>
<body>
    <div class="register-container">
        <form class="register-form" action="includes/register.inc.php" method="post">
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
