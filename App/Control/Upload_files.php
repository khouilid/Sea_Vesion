<?php


if(isset($_POST['files'])){
    $file = $_FILES['file'];

    $Name = $file['name'];
    $Type = $file['type'];
    $Path = $file['tmp_name'];
    $Error = $file['error'];

    if($Error == 0){
        $Extention = strtolower(end(explode('.', $Name)));
        $expected_files = ['xlsx', 'pdf', 'docx'];

        if(in_array($Extention, $expected_files)){

            

        }else{

             header('location: ../View/Dashbord.php?msg=loading_error');
        }

    }else{
        header('location: ../View/Dashbord.php?msg=loading_error');
    }
}