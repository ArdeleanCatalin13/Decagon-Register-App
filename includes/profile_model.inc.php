<?php

declare(strict_types=1);

function getUserData(object $pdo, string $userId) {
    $query = "SELECT * FROM users WHERE id = :userId;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":userId", $userId);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}