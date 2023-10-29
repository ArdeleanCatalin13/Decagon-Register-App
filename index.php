<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="register-container">
        <form class="register-form" action="includes/formhandler.inc.php" method="post">
            <h2>Register</h2>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="input-container">
                <label id="email-label" for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email" onkeyup="validateEmail()" required>
                <span id="email-error"></span>
            </div>
            <div class="input-container">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" placeholder="Enter password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <script src="app.js"></script>
</body>
</html>
