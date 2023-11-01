<?php

declare(strict_types=1);

function outputUsername() {
    if(isset($_SESSION["userId"])) {
        echo "You are logged in as " . $_SESSION["userUsername"];
    }
}

function checkLoginErrors() {
    if (isset($_SESSION['errorsLogin'])) {
        $errors = $_SESSION['errorsLogin'];

        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }

        unset($_SESSION['errorsLogin']);
    }
}