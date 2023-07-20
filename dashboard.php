<?php
session_start();
// print "<pre>";
// print_r($_SESSION);
// print "</pre>";
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<h1></h1>Welcome, " . $username . "! You are logged in.</h1";
} else {
    header('Location: login_form.php');
    exit;
}
?>