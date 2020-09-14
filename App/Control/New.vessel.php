<?php

include '../Model/New.vessel.php';

//get data from inputs
$Agent = $_POST['Agent'];
$Vessel = $_POST['Vessel'];
$Port = $_POST['Port'];
$IMPORT_EXPORT = $_POST['IMPORT_EXPORT']; 
$CARGO = $_POST['CARGO'];
$QTY = $_POST['QTY'];
$DESTINATION = $_POST['DESTINATION'];
$ETA_Comment = $_POST['ETA_Comment'];
$Principals_names  = $_POST['Principals_names'];
$Principal_mails = $_POST['Principal_mails'];
$ETA = $_POST['ETA'];
$ARRIVAL_DRAFTS = $_POST['ARRIVAL_DRAFTS'];
$BUNKERS_ON_ARRIVAL = $_POST['BUNKERS_ON_ARRIVAL'];


//chek if all data is set
if(isset($Agent, $Principals_names,$Principal_mails,$Vessel,$Port,$IMPORT_EXPORT,$CARGO,
    $QTY,$DESTINATION,$ETA,$ETA_Comment,$ARRIVAL_DRAFTS,$BUNKERS_ON_ARRIVAL)){
    
    //collect data : arrays into strings
    $Principals = implode(',mail:', [implode(',', $Principals_names), implode(',' , $Principal_mails)]);
    $ETA = implode(' At ', $ETA);
    $ARRIVAL_DRAFTS = implode('/', $ARRIVAL_DRAFTS);
    $BUNKERS_ON_ARRIVAL = implode('/',$BUNKERS_ON_ARRIVAL);
    //create new_vessel object
    $insert_vessel = new new_vessel($Agent, $Principals,$Vessel,$Port,
    $IMPORT_EXPORT,$CARGO,$QTY,$DESTINATION,$ETA,$ETA_Comment,$ARRIVAL_DRAFTS,$BUNKERS_ON_ARRIVAL);
    //insert all data into the DB
    $post = $insert_vessel->insert_new_vessel();

    header('location: ../View/Dashbord.php');


}else{
    header('location: ../View/Dashbord.php?e=error');
}


