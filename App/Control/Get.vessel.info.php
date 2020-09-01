<?php

include '../Model/Get.vessel.php';


if(isset($_GET['id'])){
    //get vesssel id by it's id 
    $vessel = new Get_vessel;
    $vessel = $vessel->Get_vessel_info_ID($_GET['id']);

        echo " 
        <input hidden name='vessel_id'  value=". $vessel[0]['ID'] .">
       
        <h6>Job ID:  ". $vessel[0]['ID'] ."</h6>
        <h6>Port:  ". $vessel[0]['Port'] ."</h6>
        <h6>Vessel: ". $vessel[0]['Name'] ."</h6>
       ";


  
}




