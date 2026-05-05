<?php
session_start();

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

function checkLogin() {
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }
}
?>