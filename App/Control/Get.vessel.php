<?php

include '../Model/Get.vessel.php';

$data = new Get_vessel;
$vessel_list = $data->show_vessel_list();


foreach($vessel_list as $vessel){
     // convert the string unto an array 
    $principals = explode(',mail:', $vessel['Principals']);
    $principal_names = explode(',', $principals[0]);
    $principal_mails = explode(',', $principals[1]);
    

    echo "
    <tbody id='myTable2'>
        
        <tr >
        <th scope=\"row\">". $vessel['ID'] ."</th>
        <td>". $vessel['Port'] ."</td>
        <td>". $vessel['Name'] ."</td>
        <td>". $principal_names[0] ."</td>
        <td>". $vessel['Agent'] ."</td>
        <td>". $vessel['ID'] ."</td>
        <td><button onclick='show_all_info()' class='btn btn-success'>Show All</button></td>
        </tr>
    
    </tbody>
    ";

}

