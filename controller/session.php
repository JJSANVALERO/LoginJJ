<?php

require ('./model/user.php');

function checkSession($username, $password) {
    $user = new user($username, $password);

    if ($user->username == "PracticasSIO" && $user->password == "12345") {
        session_start();
        $_SESSION['username'] = $username;
        header('location: view/header.php');
    } else {
        session_write_close();
        echo "Invalid username or password";
    }
}