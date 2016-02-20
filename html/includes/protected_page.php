<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
                Welcome to the world of Mysore Woodlands Restaurant, We shall be intimate you regarding updates, if any.
                <br><br>Thank You.<br>
                Happy New Year 2016
            </p>
            <p>Return to <a href="../index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>
