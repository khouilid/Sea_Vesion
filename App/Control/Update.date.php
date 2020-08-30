<?php
include '../Model/Update.operations.php';
//get inputs values
$id = $_POST['vessel_id'];
$ETC_time = $_POST['ETC_time'];
$ETC_date = $_POST['ETC_date'];
$ETC_Comment = $_POST['ETC_comment'];

$ETD_time = $_POST['ETD_time'];
$ETD_date = $_POST['ETD_date'];
$ETD_Comment = $_POST['ETD_comment'];

$update = new Update_info;

//
if($ETC_time != ''&& $ETC_date != ''){
    //convert array unto srting
    $ETC = implode(' à ' , [$ETC_date, $ETC_time]);
    //call the method form update;
    return $update->update_date($id ,'ETC', $ETC ,$ETC_Comment);
    
    
}elseif($ETD_time != ''&& $ETD_date != ''){
    //convert array unto srting
    $ETD = implode(' à ' , [$ETD_date, $ETD_time]);
//call the method form update;
    return $update->update_date($id ,'ETD', $ETD ,$ETD_Comment);


}
header('location: ../View/Dashbord.php');

