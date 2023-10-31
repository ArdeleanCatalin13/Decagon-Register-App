<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    
    try {
        require_once "dbh.inc.php";
        require_once "register_model.inc.php";
        require_once "register_contr.inc.php";

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

        if (isEmailRegistered($pdo, $email)) {
            $errors["emailTaken"] = "Email already taken!";
        }

        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["errorsSignup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email,
            ];
            $_SESSION["signupData"] = $signupData;

            header("Location: ../index.php");
            die();
        }

        createUser($pdo, $email, $pwd, $username);

        header("Location: ../profile.php?signup=succes");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
    die();
}