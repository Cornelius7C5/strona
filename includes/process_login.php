<?php
include_once 'functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.
if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
    $logresult = login($email, $password, $mysqli);
    if ($logresult == true) {
//        echo 'Working!';
        // Login success
        header('Location: ../index.php');
    } else {
        // Login failed
//        echo $logresult;
        header('Location: ../index.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page.
    echo 'Invalid Request';
}