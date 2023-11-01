<?php

require_once "includes/dbh.inc.php";
require_once 'includes/config_session.inc.php';
require_once 'includes/profile_model.inc.php';
require_once 'includes/profile_view.inc.php';

if (isset($_SESSION["userId"])) {
  $userId = $_SESSION["userId"];
  $profileData = getUserData($pdo, $userId);

  if ($profileData) {
    $userEmail = $profileData["email"];
    $userCreated = $profileData["created_at"];
} else {
    echo 'No data found!';
}

} else {
  header("Location: login.php");
  die();
}
?> 

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <script src="https://kit.fontawesome.com/7eb3d96340.js" crossorigin="anonymous"></script>
    <title>User Profile</title>
</head>
<body>
    <div class="profile-container">
      <div class="user-container">
        <img src=""></img>
        <i class="fa-solid fa-user fa-2xl"></i>
        <div class="display-username"><span><?php outputUsername(); ?></span></div>
        <div class="display-title"><span>WebDev</span></div>
      </div>
      <div class="info-container">
      <?php outputData($userEmail, $userCreated); ?>
        <a href="editprofile.php">
            <button>Edit</button>
        </a>
        <form action="includes/logout.inc.php" method="post"><button>Logout</button></form>
      </div>
    </div>
</body>
</html>

