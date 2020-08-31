<?php

include '../Model/Get.vessel.php';


class Show_list Extends Get_vessel{
    
    
    public function Get_vessels_lists(){

        $vessel_list = $this->show_vessel_list();


        foreach($vessel_list as $vessel){
            // convert the string unto an array 
           $principals = explode(',mail:', $vessel['Principals']);
           $principal_names = explode(',', $principals[0]);
           $principal_mails = explode(',', $principals[1]);
            //decide Status dependS ETA ETD ETC
            //TODO complite status
            if($vessel['ETA'] != ''){
                $status = 'En Route';
            }
            elseif($vessel['ETD'] != '' ){
                $status = 'Loading';
            }
            elseif($vessel['ETC'] != '' ){
               $status = '';
           }
           
       
           echo "     
               <tr >
               <th scope=\"row\">". $vessel['ID'] ."</th>
               <td>". $vessel['Port'] ."</td>
               <td>". $vessel['Name'] ."</td>
               <td>". $principal_names[0] ."</td>
               <td>". $vessel['Agent'] ."</td>
               <td>". $status ."</td>
               <td><button onclick='show_all_info()' class='btn btn-success'>Show All</button></td>
               </tr>
           ";
       
       }

    }


    public function Get_vessels_times($fun){
           
            $vessel_list = $this->show_vessel_list();



            foreach($vessel_list as $vessel){

                $ETA = $vessel['ETA'] != ""? $vessel['ETA']:'-';
                $ETD = $vessel['ETD'] != ""? $vessel['ETD']:'-';
                $ETC = $vessel['ETC'] != ""? $vessel['ETC']:'-';

                echo "   <tr > <th scope=\"row\">". $vessel['ID'] ."</th>
                <td>". $ETA ."</td>
                <td>". $ETD ."</td>
                <td>". $ETC ."</td>";
                if($fun == 1){
                    echo "
                    <td><button onclick='Get_info(". $vessel['ID'] .", 1)' class='btn btn-success'>Show All</button></td>  <tr >";
                }elseif($fun == 2){
                    echo "
                    <td><button onclick='Get_info(". $vessel['ID'] .", 2)' class='btn btn-success'>Show All</button></td>  <tr >";
                }
            }
    }
}

