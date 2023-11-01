<?php
declare(strict_types=1);

function isInputEmpty(string $username, string $pwd, string $email) {
    if (empty($username) || empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function isEmailInvalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function isUsernameTaken(object $pdo, string $username) {
    if (getUsername($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}

function isEmailRegistered(object $pdo, string $email) {
    if (getEmail($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function updateUserData(object $pdo, string $userId, string $username, string $email, string $pwd){
    setUpdatedData($pdo, $userId, $username, $email, $pwd);
}