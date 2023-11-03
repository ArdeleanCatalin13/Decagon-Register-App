<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    
    try {
        require_once "dbh.inc.php";
        require_once "edit_profile_model.inc.php";
        require_once "edit_profile_contr.inc.php";

        $errors = [];

        if (isInputEmpty($username, $email, $pwd)) {
            $errors["emptyInput"] = "Fill in all fields!";
        }

        if (isEmailInvalid($email)) {
            $errors["invalidEmail"] = "Invalid email used!";
        }

        if (isUsernameTaken($pdo, $username)) {
            $errors["usernameTaken"] = "Username already taken!";
        }

        $result = getUser($pdo, $username);

        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["errorsEdit"] = $errors;

            header("Location: ../editprofile.php");
            die();
        }

        if (isset($_SESSION["userId"])) {
            $userId = $_SESSION["userId"];
            updateUserData($pdo, $userId, $username, $email, $pwd);
            $_SESSION["userUsername"] = htmlspecialchars($username);
        }

        $pdo = null;
        $stmt = null;

        header("Location: ../profile.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../profile.php");
}