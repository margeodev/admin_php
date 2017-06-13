<?php
    ob_start();
    if($_SESSION['user_name'] == "" || $_SESSION['access_level'] == "" ){
        unset($_SESSION['user_name'], $_SESSION['access_level']);
        $_SESSION['loginError'] = "Área restrita para usuários cadastrados";
        header("Location: login.php");
    }
