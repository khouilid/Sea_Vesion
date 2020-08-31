<?php
include '../../Config/DB_connection.php';

class Update_info Extends DB_connection{


   //update vessel time program
    public function update_date($id ,$type, $date,$comment){

        if($type == 'ETD'){

            $sql = 'UPDATE `times` SET `ETD`="'. $date .'", 
            `Commnet_2`= "'. $comment .'" WHERE ID = '. $id .' ;';

        }elseif($type == 'ETC'){

            $sql = 'UPDATE `times` SET `ETC`="'. $date .'",`Commnet_2`= "'. $comment .'" 
                    WHERE ID = '. $id .' ;';

        }

        $stmt = $this->connection()->prepare($sql);

        return $stmt->execute(); 


    }
    // update operations
    public function update_operations($col, $val, $id){
        $sql = "UPDATE `operations` SET `". $col ."`= ? WHERE ID =?";

        $stmt = $this->connection()->prepare($sql);

        return $stmt->execute([$val, $id]);
    }





}