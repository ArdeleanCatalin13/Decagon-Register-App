<?php
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $userLogin = $_POST["userlogin"];
//   $userEmail = $_POST["useremail"];
//   $userPwd = $_POST["userpwd"];
  
//   try {
//       require_once "includes/dbh.inc.php";

//       $query = "SELECT * FROM users 
//       WHERE username = :userlogin AND email = :useremail AND pwd = :userpwd;";

//       $stmt = $pdo->prepare($query);

//       $stmt->bindParam(":userlogin", $userLogin);
//       $stmt->bindParam(":useremail", $userEmail);
//       $stmt->bindParam(":userpwd", $userPwd);

//       $stmt->execute();

//       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//       $pdo = null;
//       $stmt = null;

//   } catch (PDOException $e) {
//       die("Query failed: " . $e->getMessage());
//   }
// }
// else {
//   header("Location: ./login.php");
// }
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

        <?php

        if(empty($results)) {
          echo "<div>";
          echo "<p>Username, email or password is incorrect!</p>";
          echo "</div>";
          } else {
            foreach ($results as $row) {
              ?>
              <div class="display-username"><span><?php echo htmlspecialchars($row["username"]); ?></span></div>
              

              <?php
          }
          }
        

        ?>

        
        <div class="display-title"><span>WebDev</span></div>
      </div>
      <div class="info-container">
      <?php

      if(empty($results)) {
        echo "<div>";
        echo "<p>Username, email or password is incorrect!</p>";
        echo "</div>";
        } else {
          foreach ($results as $row) {
            ?>
            <div class="display-email"><span>Email</span><span><?php echo htmlspecialchars($row["email"]); ?></span></div>

            

            <?php
        }
        }


      ?>
        <!-- <div class="display-name"><span>Username</span><span>Catalin</span></div>
        <div class="display-email"><span>Email</span><span>fip@jukmuh.al</span></div>
        <div class="display-phone"><span>Phone</span><span>(239) 816-9029</span></div>
        <div class="display-adress"><span>Adress</span><span>Bay Area, San Francisco, CA</span></div> -->
        <a href="editprofile.php">
            <button>Edit</button>
        </a>
        <form action="includes/logout.inc.php" method="post"><button>Logout</button></form>
      </div>
    </div>
</body>
</html>

