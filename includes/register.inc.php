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
        
        if (isUsernameInvalid($username)) {
            $errors["invalidUsername"] = "Username too short!";
        }
        
        if (isPasswordInvalid($pwd)) {
            $errors["invalidPassword"] = "Password is not strong enough!";
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

        $result = getUser($pdo, $username);

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["userId"] = $result["id"];
        $_SESSION["userUsername"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../profile.php");

        $pdo = null;
        $stmt = null;
        unset($_SESSION["signupData"]);

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
    die();
}