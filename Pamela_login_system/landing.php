<?php
require 'session.php';
checkLogin();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Landing Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="container">

            <h2>Welcome, <?= $_SESSION['name']; ?>!!</h2>

            <p><b>Username:</b> <?= $_SESSION['username']; ?></p>
            <p><b>User ID:</b> <?= $_SESSION['id']; ?></p>
            <p><b>Session Active:</b> YES</p>

            <a href="logout.php">
                <button>Logout</button>
            </a>

        </div>

    </body>
</html>