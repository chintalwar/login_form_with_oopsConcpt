<?php

require_once 'database.php';
require_once 'login_controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $database = new Database();
    $db = $database->getConnection();
    $loginController = new LoginController($db);
    $loginResult = $loginController->loginUser($username, $password);

    if ($loginResult !== true) {
        echo $loginResult;
    }
}
