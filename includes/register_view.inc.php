<?php

declare(strict_types=1);

function signupInputs() {
    if (isset($_SESSION["signupData"]["username"]) && 
    !isset($_SESSION["errorsSignup"]["usernameTaken"])) {
        echo '<div class="input-container">';
        echo '<label for="username">Username</label>';
        echo '<input type="text" id="username" name="username" placeholder="Enter username" value="' . $_SESSION["signupData"]["username"] . '">';
        echo '</div>';
    } else {
        echo '<div class="input-container">';
        echo '<label for="username">Username</label>';
        echo '<input type="text" id="username" name="username" placeholder="Enter username">';
        echo '</div>';
    }

    if (isset($_SESSION["signupData"]["email"]) && 
    !isset($_SESSION["errorsSignup"]["emailUsed"])  && 
    !isset($_SESSION["errorsSignup"]["invalidEmail"])) {
        echo '<div class="input-container">';
        echo '<label for="email">Email</label>';
        echo '<input type="text" id="email" name="email" placeholder="Enter email" value="' . $_SESSION["signupData"]["email"] . '">';
        echo '</div>';
    } else {
        echo '<div class="input-container">';
        echo '<label for="email">Email</label>';
        echo '<input type="text" id="email" name="email" placeholder="Enter email">';
        echo '</div>';
    }

    echo '<div class="input-container">';
    echo '<label for="pwd">Password</label>';
    echo '<input type="password" id="pwd" name="pwd" placeholder="Enter password">';
    echo '</div>';
}

function checkSignupErrors() {
    if (isset($_SESSION['errorsSignup'])) {
        $errors = $_SESSION['errorsSignup'];

        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }

        unset($_SESSION['errorsSignup']);
    } 
}