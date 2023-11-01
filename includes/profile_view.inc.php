<?php

declare(strict_types=1);

require_once 'profile_model.inc.php';

function outputUsername() {
    if(isset($_SESSION["userId"])) {
        echo $_SESSION["userUsername"];
    }
}

function outputData(string $userEmail, string $userCreated) {
    echo '<div class="display-email"><span>Email</span><span>' . htmlspecialchars($userEmail) . '</span></div>';
    echo '<div class="display-email"><span>Account created</span><span>' . htmlspecialchars($userCreated) . '</span></div>';
}