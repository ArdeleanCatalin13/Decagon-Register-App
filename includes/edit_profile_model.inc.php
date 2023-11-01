<?php

declare(strict_types=1);

function getUsername(object $pdo, string $username) {
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(object $pdo, string $email) {
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getUser(object $pdo, string $username) {
    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUpdatedData(object $pdo, string $userId, string $username, string $email, string $pwd) {
    
    $query = "UPDATE users SET username = :username, email = :email, pwd = :pwd WHERE id = :userId;";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":userId", $userId);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedPwd);
    
    $stmt->execute();
    
    return $result;
    
}