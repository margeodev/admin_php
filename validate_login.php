<?php
session_start();
require 'data_base_conf/config.php';
require 'data_base_conf/connection.php';
require 'data_base_conf/database.php';

$login = $_POST['user'];
$password = $_POST['password'];

$result = DBRead('users', "WHERE login='$login' AND password='$password' LIMIT 1");

if (empty($result)) {
    $_SESSION['loginError'] = "Usuário ou senha inválido";
    header("Location: login.php");
} else {
    $user = $result[0];
    $name = $user['name'];
    $access_level = $user['access_level_id'];

    $_SESSION['user_name']    = $name;
    $_SESSION['access_level'] = $access_level;

    if($_SESSION['access_level'] == 1){
        header("Location: management.php");
    } else {
        header("Location: user.php");
    }

}

