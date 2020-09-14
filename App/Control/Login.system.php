<?php

include '../Model/Login.system.php';



$mail = $_POST['mail'];
$password = $_POST['password'];


//check if this accent exicte
$lets_log_in = new Log_in($mail, $password);
$result = $lets_log_in->log();

if($result == 1){
    header('location: ../View/Dashbord.php');
    session_start();
    $_SESSION['is_user'] = true;
}else{
    header('location: ../../index.php?m=not_user ');
}
