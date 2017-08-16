<?php
    
    require_once 'loginController.php';

    if(isset($_POST['mobl']) && $_POST['pass']) {
        echo Login::userLogin($_POST['mobl'], $_POST['pass']);
    }