<?php
include_once '../Model/LineUps.php';





class displayLineUp extends LineUps{


    //display into
    public function Display($elect,$id, $VESSEL, $TONNAGE, $IMPORT_EXPORT, $CARGO,  $ETA ,$ETD,$ETC, $DESTINATION){
        echo '    
        <table class="table table-hover ">
        <thead class="thead-dark1 ">
        <tr class="text-white">
        ';
            
            if($elect == true){

                                
                echo '<th scope="col">Select</th>';
            }
            echo '
            <th scope="col">VESSEL</th>
            <th scope="col">TONNAGE</th>
            <th scope="col">IMPORT/EXPORT</th>
            <th scope="col">CARGO</th>
          
            <th scope="col">ETA</th>
            <th scope="col">ETD</th>
            <th scope="col">ETC</th>
            <th scope="col">DESTINATION</th>
            </tr>
            </thead>
            <tbody id="myTable2">
            
            <tr >
            ';
            
            if($elect == true){

                                
                echo '<td><input type="checkbox" name="select_vessels[]" value="'. $id .'" aria-label="Checkbox for following text input"></td>';
            }
            echo '
         
            
            
            <td>'. $VESSEL .'</td>
            <td>'. $TONNAGE .'</td>
            <td>'. $IMPORT_EXPORT .'</td>
            <td>'. $CARGO .'</td>
           
            
            <td>'. $ETA .'</td>
            <td>'. $ETD .'</td>
            <td>'. $ETC .'</td>
            <td>'. $DESTINATION .'</td>
            
            </tr>
        
        </tbody>
        </table>';
    }
    //filter info
    public function filter_info($vessels){
        foreach($vessels as $vessel){
            $ETC = explode(' At ', $vessel['ETC']);
            $ETA = explode(' At ', $vessel['ETA']);
            $ETD = explode(' At ', $vessel['ETD']);
            
            if($ETC[0] == date("Y-m-d")){
            
                 //call display function
          
                $this->Display(false,$vessel['ID'],$vessel['Name'], $vessel['Qty'], $vessel['IMPORT_EXPORT'], $vessel['Cargo'], $ETA[0],$ETD[0],$ETC[0], $vessel['Desti']);
            }
            if($ETD[0] == date("Y-m-d")){
                    
                        //call display function
                
                    $this->Display(false,$vessel['ID'],$vessel['Name'], $vessel['Qty'], $vessel['IMPORT_EXPORT'], $vessel['Cargo'], $ $ETA[0],$ETD[0],$ETC[0], $vessel['Desti']);
                }
            if($ETA[0] == date("Y-m-d")){
                    
                    //call display function
            
                $this->Display(false,$vessel['ID'], $vessel['Name'], $vessel['Qty'], $vessel['IMPORT_EXPORT'], $vessel['Cargo'],  $ETA[0],$ETD[0],$ETC[0], $vessel['Desti']);
            }
        
        }
    }

    public function filter_info_G($vessels){
        foreach($vessels as $vessel){
            $ETC = explode(' At ', $vessel['ETC']);
            $ETA = explode(' At ', $vessel['ETA']);
            $ETD = explode(' At ', $vessel['ETD']);
            $this->Display(true, $vessel['ID'], $vessel['Name'], $vessel['Qty'], $vessel['IMPORT_EXPORT'], $vessel['Cargo'],  $ETA[0],$ETD[0],$ETC[0], $vessel['Desti']);

        }
    }

    public function bulk_filter($day ,$vessels){
        $endTime = date('yy-m-d');

        if($day == 'Monday'){
            $startTime = date('y-m-d', strtotime(date('y-m-d')) - 60*60*72);
            
        }elseif($day == 'Friday'){

            $startTime = date('y-m-d', strtotime(date('y-m-d')) - 60*60*96);
            
        }elseif($day == 'Wednesday'){

            $startTime = date('y-m-d', strtotime(date('y-m-d')) - 60*60*168);
            
        }

        foreach($vessels as $vessel){
            $ETC = explode(' At ', $vessel['ETC']);
            $ETA = explode(' At ', $vessel['ETA']);
            $ETD = explode(' At ', $vessel['ETD']);
          
     
            if (date('y-m-d', strtotime($ETC[0])) <= $endTime && date('y-m-d', strtotime($ETC[0])) >= $startTime){
                 
                 $this->Display(false,$vessel['ID'], $vessel['Name'], $vessel['Qty'], $vessel['IMPORT_EXPORT'], $vessel['Cargo'],  $ETA[0],$ETD[0],$ETC[0], $vessel['Desti']);

            }
            if ((date('y-m-d', strtotime($ETD[0])) <= $endTime && date('y-m-d', strtotime($ETD[0])) >= $startTime) && ($ETC[0] == '')){
            
                $this->Display(false,$vessel['ID'], $vessel['Name'], $vessel['Qty'], $vessel['IMPORT_EXPORT'], $vessel['Cargo'],  $ETA[0],$ETD[0],$ETC[0], $vessel['Desti']);

            }
            if ((date('y-m-d', strtotime($ETA[0])) <= $endTime && date('y-m-d', strtotime($ETA[0])) >= $startTime) && ($ETC[0] == '' && $ETD[0] == '')){
            
                $this->Display(false,$vessel['ID'], $vessel['Name'], $vessel['Qty'], $vessel['IMPORT_EXPORT'], $vessel['Cargo'],  $ETA[0],$ETD[0],$ETC[0], $vessel['Desti']);

            }
        }


    }

    public function bulkTerminal(){

        $vessels = $this->Bulk_terminal('JORF LASFAR');
       
        if (date('l') == 'Monday'){
        
            return $this->bulk_filter('Monday' ,$vessels);

        }elseif (date('l') == 'Friday'){
        
            return $this->bulk_filter('Friday',$vessels);
                

        }else{
            echo '<p class ="bg-light text-danger shadow-sm text-center p-4 rounded m-3"><strong>This line up will display only in Monday and Friday!</strong></p>';
        }

        

    }
    public function LineUps($type){

        

        if (date('l') == 'Wednesday'){
            if($type !== 'JORF_1' && $type  != 'JORF_2'){
                $vessels = $this->Bulk_terminal($type);
            }elseif($type == 'JORF_1'){
                $vessels = $this->JorfLasfar_ferilizer();
            }
            elseif($type == 'JORF_2'){
                $vessels = $this->JorfLasfar_NOT_ferilizer();
            }
            
            return $this->bulk_filter('Wednesday',$vessels);
                

        }else{
            echo '<p class ="bg-light text-danger shadow-sm text-center p-4 rounded m-3"><strong>This line up will display only in Wednesday!</strong></p>';
        }
    }
    
    public function __construct($fun){
        
        if($fun == 'fertilizer'){

            $vessels = $this->fertilizer();
            $this->filter_info($vessels);
            

        }elseif($fun == 'SULPHUR'){

            $vessels = $this->SULPHUR();
            $this->filter_info($vessels);
        }
        elseif($fun == 'Tanker'){

            $vessels = $this->Tanker();
            $this->filter_info($vessels);
        }
        elseif($fun == 'Grain'){

            $vessels = $this->Grain();
            $this->filter_info_G($vessels);
        }

        elseif($fun == 'General'){

            $vessels = $this->General();
            $this->filter_info_G($vessels);
        }
        elseif($fun == 'Bulk_terminal'){

            $this->bulkTerminal();
        }
        elseif($fun == 'SAFI'){

            $this->LineUps('SAFI');
        }
        elseif($fun == 'LAAYOUNE'){

            $this->LineUps('LAAYOUNE');
        }
        elseif($fun == 'CASABLANCA'){

            $this->LineUps('CASABLANCA');
        }
        elseif($fun == 'LJORF_FERT'){

            $this->LineUps('JORF_1');
        }
        elseif($fun == 'LJORF_NOT_FERT'){

            $this->LineUps('JORF_2');
        }

    }

}
if(isset($_GET['type'])){

    return new displayLineUp($_GET['type']);
}