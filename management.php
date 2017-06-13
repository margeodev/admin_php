<?php
    session_start();
    include_once("security.php");
    echo "Bem vindo " . $_SESSION['user_name'];


