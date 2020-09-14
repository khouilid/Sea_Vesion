<?php

include '../Model/Get.vessel.php';

if(isset($_GET['id'])){
    //get vesssel id by it's id 
    $vessel = new Get_vessel;
    $vessel = $vessel->Get_vessel_info_ID($_GET['id']) ;

    //convert data from string unto array
    //check if the data is set
    $ARRIVAL_DRAFTS = $vessel[0]["ARRIVAL_DRAFTS"] != "" ? explode('/', $vessel[0]["ARRIVAL_DRAFTS"]) 
    : ['-','-'];

    $SAILING_DRAFTS = $vessel[0]["SAILING_DRAFTS"] != "" ? explode('/', $vessel[0]["SAILING_DRAFTS"]) 
    : ['-','-'];
    

    $BUNKERS_ON_ARRIVAL = $vessel[0]["BUNKERS_ON_ARRIVAL"] != "" ? explode('/', $vessel[0]["BUNKERS_ON_ARRIVAL"]) 
    : ['-','-','-','-'];

    $BUNKERS_ON_SAILING = $vessel[0]["BUNKERS_ON_SAILING"] != "" ? explode('/', $vessel[0]["BUNKERS_ON_SAILING"]) 
    : ['-','-','-','-'];
    

    $EOSP = $vessel[0]["EOSP"] != "" ? explode('/', $vessel[0]["EOSP"]) 
    : ['-','-','-','-'];
    
    
    $DROPPED_ANCHORAGE = $vessel[0]["DROPPED_ANCHORAGE"] != "" ? explode('/', $vessel[0]["DROPPED_ANCHORAGE"]) 
    : ['-','-','-','-'];

  
    $HAVED_UP_ANCHOR = $vessel[0]["HAVED_UP_ANCHOR"] != "" ? explode('/', $vessel[0]["HAVED_UP_ANCHOR"]) 
    : ['-','-','-','-'];
 
    $PILOT_ON_BOARD_1 = $vessel[0]["PILOT_ON_BOARD_1"] != "" ? explode('/', $vessel[0]["PILOT_ON_BOARD_1"]) 
    : ['-','-','-','-'];

    $FIRST_LINE_ASHORE = $vessel[0]["FIRST_LINE_ASHORE"] != "" ? explode('/', $vessel[0]["FIRST_LINE_ASHORE"]) 
    : ['-','-','-','-'];
  
    $ALL_FAST = $vessel[0]["ALL_FAST"] != "" ? explode('/', $vessel[0]["ALL_FAST"]) 
    : ['-','-','-','-']; 


    $PILOT_OFF_1 = $vessel[0]["PILOT_OFF_1"] != "" ? explode('/', $vessel[0]["PILOT_OFF_1"]) 
    : ['-','-','-','-'];   
    
    $GANGWAY_READY = $vessel[0]["GANGWAY_READY"] != "" ? explode('/', $vessel[0]["GANGWAY_READY"]) 
    : ['-','-','-','-'];

    $COMMENCED_DISCHARGING = $vessel[0]["COMMENCED_DISCHARGING"] != "" ? explode('/', $vessel[0]["COMMENCED_DISCHARGING"]) 
    : ['-','-','-','-'];  

    $COMPLETED_DISCHARGING = $vessel[0]["COMPLETED_DISCHARGING"] != "" ? explode('/', $vessel[0]["COMPLETED_DISCHARGING"]) 
    : ['-','-','-','-'];

 
    $PILOT_ON_BOARD_2 = $vessel[0]["PILOT_ON_BOARD_2"] != "" ? explode('/', $vessel[0]["PILOT_ON_BOARD_2"]) 
    : ['-','-','-','-'];


    $SAILING = $vessel[0]["SAILING"] != "" ? explode('/', $vessel[0]["SAILING"]) 
    : ['-','-','-','-'];


    $PILOT_OFF_2 = $vessel[0]["PILOT_OFF_2"] != "" ? explode('/', $vessel[0]["PILOT_OFF_2"]) 
    : ['-','-','-','-'];

   
    $NUMBER_TUGS_ENTRY = $vessel[0]["NUMBER_TUGS_ENTRY"] != "" ? explode('/', $vessel[0]["NUMBER_TUGS_ENTRY"]) 
    : ['-','-','-','-'];
 
    $NUMBER_TUGS_SAILING = $vessel[0]["NUMBER_TUGS_SAILING"] != "" ? explode('/', $vessel[0]["NUMBER_TUGS_SAILING"]) 
    : ['-','-','-','-'];
 
 
    $SERVICES = explode('/', $vessel[0]['SERVICES']);

    $Principals = explode(',mail:', $vessel[0]['Principals']); 
    $Principals = explode(',', $Principals[0]);

    if($vessel[0]['ETA'] != ''){
        $status = 'En Route';
    }
    elseif($vessel[0]['ETD'] != '' ){
        $status = 'Loading';
    }
    elseif($vessel[0]['ETC'] != '' ){
       $status = '';
   }
    echo "
    <div>
        <h1 onclick='back_Arrow(2)'><i class=\"fas fa-arrow-left\"></i></h1>
    </div>
    <div class='ml-5'>
        <button class='btn btn-success m-2'>". $status ."</button>
        <button class='btn btn-success m-2'>PDA Pending</button>
        <button class='btn btn-success m-2'>". $vessel[0]["Cargo"] ."</button>
    </div>
    <div class='d-flex flex-wrap justify-content-center flex-lg-nowrap'>

        <div class='width_1  w-25 m-3'>
           <table class=\"table table-borderless ml-3\">
                <tbody>
                    <tr>
                        <th scope=\"row\">Job ID:</th>
                        <td>". $vessel[0]["ID"] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">ETA:</th>
                        <td>". $vessel[0]["ETA"] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">ETD</th>
                        <td>". $vessel[0]["ETD"] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">ETC</th>
                        <td>". $vessel[0]["ETC"] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Port:</th>
                        <td>". $vessel[0]["Port"] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Vessel</th>
                        <td>". $vessel[0]["Name"] ."</td>
                    </tr>
                    
                  
                    <tr>
                        <th scope=\"row \" class='orange'>ARRIVAL DRAFTS(m)</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope=\"row\">FOR</th>
                        <td>". $ARRIVAL_DRAFTS[0] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">AFT</th>
                        <td>". $ARRIVAL_DRAFTS[1] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\"class='orange'>SAILING DRAFTS(m)</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope=\"row\">FOR</th>
                        <td>". $SAILING_DRAFTS[0] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">AFT</th>
                        <td>". $SAILING_DRAFTS[1] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class='orange'>BUNKERS ON ARRIVAL</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope=\"row\">FO</th>
                        <td>". $BUNKERS_ON_ARRIVAL[0] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">DO</th>
                        <td>". $BUNKERS_ON_ARRIVAL[1] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">FW</th>
                        <td>". $BUNKERS_ON_ARRIVAL[2] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">LO</th>
                        <td>". $BUNKERS_ON_ARRIVAL[3] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class='orange'>BUNKERS ON SAILING</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope=\"row\">FO</th>
                        <td>". $BUNKERS_ON_SAILING[0] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">DO</th>
                        <td>". $BUNKERS_ON_SAILING[1] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">FW</th>
                        <td>". $BUNKERS_ON_SAILING[2] ."</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">LO</th>
                        <td>". $BUNKERS_ON_SAILING[3] ."</td>
                    </tr>
                    
                    <tr>
                        <th scope=\"row\" class='orange'>B/L QTY :</th>
                        <td>". $vessel[0]['Qty'] ."</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class='operations_cards width_1  w-50 d-flex flex-wrap'>
            <div data-toggle='tooltip' data-placement='top' title='". $EOSP[2] ."' data-toggle='tooltip' data-placement='top' title='". $EOSP[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>End Of Sea Passage:</h5>
                <p>". $EOSP[0] ." at ". $EOSP[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $DROPPED_ANCHORAGE[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>DROPPED ANCHORAGE</h5>
                <p>". $DROPPED_ANCHORAGE[0] ." at ". $DROPPED_ANCHORAGE[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $HAVED_UP_ANCHOR[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>HAVED UP ANCHOR</h5>
                <p>". $HAVED_UP_ANCHOR[0] ." at ". $HAVED_UP_ANCHOR[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $PILOT_ON_BOARD_1[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>PILOT ON BOARD</h5>
                <p>". $PILOT_ON_BOARD_1[0] ." at ". $PILOT_ON_BOARD_1[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='".  $FIRST_LINE_ASHORE[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>FIRST LINE ASHORE</h5>
                <p>".  $FIRST_LINE_ASHORE[0] ." at ".  $FIRST_LINE_ASHORE[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='".  $ALL_FAST[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>ALL FAST</h5>
                <p>".  $ALL_FAST[0] ." at ".  $ALL_FAST[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $PILOT_OFF_1[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>PILOT OFF</h5>
                <p>". $PILOT_OFF_1[0] ." at ". $PILOT_OFF_1[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $GANGWAY_READY[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>GANGWAY READY</h5>
                <p>". $GANGWAY_READY[0] ." at ". $GANGWAY_READY[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $COMMENCED_DISCHARGING[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>COMMENCED DISCHARGING</h5>
                <p>". $COMMENCED_DISCHARGING[0] ." at ". $COMMENCED_DISCHARGING[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $COMPLETED_DISCHARGING[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>COMPLETED DISCHARGING</h5>
                <p>". $COMPLETED_DISCHARGING[0] ." at ". $COMPLETED_DISCHARGING[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='".  $PILOT_ON_BOARD_2[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>PILOT ON BOARD</h5>
                <p>".  $PILOT_ON_BOARD_2[0] ." at ".  $PILOT_ON_BOARD_2[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $SAILING[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>SAILING</h5>
                <p>". $SAILING[0] ." at ". $SAILING[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $PILOT_OFF_2[2] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>PILOT OFF</h5>
                <p>". $PILOT_OFF_2[0] ." at ". $PILOT_OFF_2[1] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='". $NUMBER_TUGS_ENTRY[1] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>NUMBER TUGS ENTRY</h5>
                <p>". $NUMBER_TUGS_ENTRY[0] ."</p>
            </div>
            <div data-toggle='tooltip' data-placement='top' title='".  $NUMBER_TUGS_SAILING[1] ."' class='card_1 m-3 p-1 bg-light rounded row flex-column justify-content-center'>
                <h5 class='text-secondary'>NUMBER TUGS SAILING</h5>
                <p>".  $NUMBER_TUGS_SAILING[0] ."</p>
            </div>
        </div>
      
        <div class=\"card width_1  w-25\">
            <div class=\"card-body w-100\">
                <h5 class=\"card-title orange\">More informations</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">Performing Agent:</h6>
                <p class=\"card-text\">". $vessel[0]['Agent'] . "</p>
                <h6 class=\"card-subtitle mb-2 text-muted\">Principal main contact:</h6>
                <p class=\"card-text\">".     $Principals[0] . "</p>
                <h6 class=\"card-subtitle mb-2 text-muted\">Principal: </h6>
                <p class=\"card-text\">".     $Principals[1] . "</p>
                <h5 class=\"card-title text-success\">SERVICES</h5>
                <div class='m-3'>
                <table class=\"table table-borderless ml-3\">
                <tbody>
                        ";

                for($i = 0; $i < sizeof($SERVICES); $i++){
                    if($SERVICES[$i] != 1){
                        echo '
                        <tr>
                            <th scope=\"row\">'. $SERVICES[$i] .'</th>
                            <td>OUI</td>
                        </tr>
                        ';
                    }
                }
                                  
                              
                      

                echo '              
                                </tbody>
                            </table>
                    </div>
                </div>
                </div>

                </div>';






}