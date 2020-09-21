<?php

include '../Model/Login.system.php';


if($_POST['mail'] != '' && $_POST['password'] != '' ){
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
}else{
    header('location: ../../index.php?m=empty ');

}



