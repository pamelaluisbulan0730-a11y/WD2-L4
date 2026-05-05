<?php
require 'session.php';

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Logout</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="container">
            <h2>Thank you for using </h2>

            <a href="index.php">
                <button>Go to Login</button>
            </a>
        </div>
    </body>
</html>