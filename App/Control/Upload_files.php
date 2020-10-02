<?php
include_once '../Model/Upload_file.php';

if(isset($_POST['files'])){
    $file = $_FILES['file'];

    $Name = $file['name'];
    $Type = $file['type'];
    $Path = $file['tmp_name'];
    $Error = $file['error'];

    if($Error == 0){
        $Ext = explode('.', $Name);
        $Extention = strtolower(end($Ext));
        $expected_files = ['xlsx', 'pdf', 'docx'];

        if(in_array($Extention, $expected_files)){

            session_start();
            $id = $_SESSION['v_id'];
            $Name = $Ext[0] . '_' . uniqid('', true) . "." . $Extention;
            $destination = '../../Uploaded_Files/'. $Name;
     
            move_uploaded_file($Path, $destination);
            
            $up = new Upload_file;
            $up = $up->upload($id, $destination);
            // unset($_SESSION["v_id"]);
            header('location: ../View/Dashbord.php?msg=fileUp');

        


        }else{

             header('location: ../View/Dashbord.php?msg=loading_error');
        }

    }else{
        header('location: ../View/Dashbord.php?msg=loading_error');
    }
}