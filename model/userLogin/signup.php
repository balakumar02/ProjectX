<?php

    require_once 'loginController.php';

    if (isset($_POST['user']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['address'])) {
        echo Login::userSignup($_POST['user'], $_POST['mobile'], $_POST['email'], $_POST['pass'], $_POST['address']);
    }