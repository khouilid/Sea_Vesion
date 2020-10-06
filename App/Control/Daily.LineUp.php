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

    }

}
if(isset($_GET['type'])){

    return new displayLineUp($_GET['type']);
}