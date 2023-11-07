<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/edit_profile_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editprofile.css">
    <script src="https://kit.fontawesome.com/7eb3d96340.js" crossorigin="anonymous"></script>
    <script defer src="editprofile.js"></script>
    <title>Edit Profile</title>
</head>
<body>
    <div class="profile-container">    
        <form class="edit-form" id="edit-form" action="includes/edit_profile.inc.php" method="post">
            <h2>Edit Profile</h2>
            <div class="input-container">
                <label for="name">Name:</label>
                <input type="text" name="username" id="username">
                <i class="fa-solid fa-circle-check fa-lg" style="color: #16b913;"></i>
                <i class="fa-solid fa-circle-exclamation fa-lg" style="color: #ca0c0c;"></i>
                <small>Error Message</small>
            </div>
            <div class="input-container">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <i class="fa-solid fa-circle-check fa-lg" style="color: #16b913;"></i>
                <i class="fa-solid fa-circle-exclamation fa-lg" style="color: #ca0c0c;"></i>
                <small>Error Message</small>
            </div>
            <div class="input-container">
                <label for="pwd">Password:</label>
                <input type="password" name="pwd" id="pwd">
                <i class="fa-solid fa-circle-check fa-lg" style="color: #16b913;"></i>
                <i class="fa-solid fa-circle-exclamation fa-lg" style="color: #ca0c0c;"></i>
                <small>Error Message</small>
            </div>
            <button type="submit">Save changes</button>
        </form>
        <?php
        checkLoginErrors();
        ?>
    </div>
</body>
</html>
