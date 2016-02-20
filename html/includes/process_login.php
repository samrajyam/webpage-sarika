

<?php
include_once 'db_connect.php';
include_once 'functions.php';
sec_session_start(); // Our custom secure way of starting a PHP session.


if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.

    if (login($email, $password, $mysqli) == true) {
        // Login success
        echo 'success 1';
        header('Location: protected_page.php');
        echo 'success 2';
    } else {
        // Login failed
        echo 'failed 1';
        header('Location: ../index.php?error=1');
        echo 'Failed 2';
    }

} else {

    // The correct POST variable
    //s were not sent to this page.
    echo 'Invalid Request';
}


