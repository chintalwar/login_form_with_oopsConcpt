<?php

require_once 'user.php';

class LoginController {
    private $user;

    public function __construct($db) {
        $this->user = new User($db);
    }

    public function loginUser($username, $password) {
        if ($this->user->isValidUser($username, $password)) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit;
        } else {
            return 'Invalid username or password.';
        }
    }
}
