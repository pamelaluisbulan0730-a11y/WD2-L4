<?php
require 'session.php';

// SAMPLE SOCIAL MEDIA USERS (like database)
$users = [
    ["id" => 1, "username" => "Pamela", "password" => "pampam", "name" => "Chiee Chiee"],
    ["id" => 2, "username" => "user", "password" => "pass", "name" => "Normal User"]
];

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    foreach ($users as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {

            // SESSION START
            $_SESSION["id"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["name"] = $user["name"];

            header("Location: landing.php");
            exit();
        }
    }

    $error = "Invalid username or password!";
}
?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <h2>Login</h2>

            <?php if ($error): ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>

            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>

        </div>

    </body>
</html>