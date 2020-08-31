<?php
include '../Model/Update.progam.php';


$id = $_POST['vessel_id'];
//get input data : arrays
$EOSP = $_POST['EOSP'];
$DROPPED_ANCHORAGE = $_POST['DROPPED_ANCHORAGE'];
$HAVED_UP_ANCHOR = $_POST['HAVED_UP_ANCHOR'];
$PILOT_ON_BOARD_1 = $_POST['PILOT_ON_BOARD_1'];
$FIRST_LINE_ASHORE = $_POST['FIRST_LINE_ASHORE'];
$ALL_FAST = $_POST['ALL_FAST'];
$PILOT_OFF_1 = $_POST['PILOT_OFF_1'];
$GANGWAY_READY = $_POST['GANGWAY_READY'];
$COMMENCED_DISCHARGING = $_POST['COMMENCED_DISCHARGING'];
$COMPLETED_DISCHARGING = $_POST['COMPLETED_DISCHARGING'];
$PILOT_ON_BOARD_2 = $_POST['PILOT_ON_BOARD_2'];
$SAILING = $_POST['SAILING'];
$PILOT_OFF_2 = $_POST['PILOT_OFF_2'];
$NUMBER_TUGS_SAILING = $_POST['NUMBER_TUGS_SAILING'];
$SAILING_DRAFTS = $_POST['SAILING_DRAFTS'];
$BUNKERS_ON_SAILING = $_POST['BUNKERS_ON_SAILING'];

$SERVICE = $_POST['SERVICE'];
$NUMBER_TUGS_ENTRY = $_POST['NUMBER_TUGS_ENTRY'];


$update = new Update_info;

if($EOSP != ''){

    $EOSP = implode('/', $EOSP);
    print_r($EOSP);
    $update->update_operations('EOSP', $EOSP, $id);

}
if($DROPPED_ANCHORAGE != ''){

    $DROPPED_ANCHORAGE = implode('/', $DROPPED_ANCHORAGE);
    $update->update_operations('DROPPED_ANCHORAGE', $DROPPED_ANCHORAGE, $id);

}
if($HAVED_UP_ANCHOR != ''){

    $HAVED_UP_ANCHOR = implode('/', $HAVED_UP_ANCHOR);
    $update->update_operations('HAVED_UP_ANCHOR', $HAVED_UP_ANCHOR, $id);

}
if($PILOT_ON_BOARD_1 != ''){

    $PILOT_ON_BOARD_1 = implode('/', $PILOT_ON_BOARD_1);
    $update->update_operations('PILOT_ON_BOARD_1', $PILOT_ON_BOARD_1, $id);

}
if($FIRST_LINE_ASHORE != ''){

    $FIRST_LINE_ASHORE = implode('/', $FIRST_LINE_ASHORE);
    $update->update_operations('FIRST_LINE_ASHORE', $FIRST_LINE_ASHORE, $id);

}

if($ALL_FAST != ''){

    $ALL_FAST = implode('/', $ALL_FAST);
    $update->update_operations('ALL_FAST', $ALL_FAST, $id);

}
if($PILOT_OFF_1 != ''){

    $PILOT_OFF_1 = implode('/', $PILOT_OFF_1);
    $update->update_operations('PILOT_OFF_1', $PILOT_OFF_1, $id);

}
if($COMMENCED_DISCHARGING != ''){

    $COMMENCED_DISCHARGING = implode('/', $COMMENCED_DISCHARGING);
    $update->update_operations('COMMENCED_DISCHARGING', $COMMENCED_DISCHARGING, $id);

}
if($COMPLETED_DISCHARGING != ''){

    $COMPLETED_DISCHARGING = implode('/', $COMPLETED_DISCHARGING);
    $update->update_operations('COMPLETED_DISCHARGING', $COMPLETED_DISCHARGING, $id);

}
if($PILOT_ON_BOARD_2 != ''){

    $PILOT_ON_BOARD_2 = implode('/', $PILOT_ON_BOARD_2);
    $update->update_operations('PILOT_ON_BOARD_2', $PILOT_ON_BOARD_2, $id);

}
if($SAILING != ''){

    $SAILING = implode('/', $SAILING);
    $update->update_operations('SAILING', $SAILING, $id);

}

if($PILOT_OFF_2 != ''){

    $PILOT_OFF_2 = implode('/', $PILOT_OFF_2);
    $update->update_operations('PILOT_OFF_2', $PILOT_OFF_2, $id);

}

if($NUMBER_TUGS_SAILING != ''){

    $NUMBER_TUGS_SAILING = implode('/', $NUMBER_TUGS_SAILING);
    $update->update_operations('NUMBER_TUGS_SAILING', $NUMBER_TUGS_SAILING, $id);

}

if($SAILING_DRAFTS != ''){

    $SAILING_DRAFTS = implode('/', $SAILING_DRAFTS);
    $update->update_operations('SAILING_DRAFTS', $SAILING_DRAFTS, $id);

}

if($BUNKERS_ON_SAILING != ''){

    $BUNKERS_ON_SAILING = implode('/', $BUNKERS_ON_SAILING);
    $update->update_operations('BUNKERS_ON_SAILING', $BUNKERS_ON_SAILING, $id);

}
if($SERVICE != ''){

    $SERVICE = implode('/', $SERVICE);
    $update->update_operations('SERVICE', $SERVICE, $id);

}
if($NUMBER_TUGS_ENTRY != ''){

    $NUMBER_TUGS_ENTRY = implode('/', $NUMBER_TUGS_ENTRY);
    $update->update_operations('NUMBER_TUGS_ENTRY', $NUMBER_TUGS_ENTRY, $id);

}




// header('location: ../View/Dashbord.php');






