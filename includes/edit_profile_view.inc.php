<?php

declare(strict_types=1);

function checkLoginErrors() {
    if (isset($_SESSION['errorsEdit'])) {
        $errors = $_SESSION['errorsEdit'];

        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }

        unset($_SESSION['errorsEdit']);
    }
}