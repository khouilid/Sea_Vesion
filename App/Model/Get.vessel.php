<?php

include '../../Config/DB_connection.php';


class Get_vessel Extends DB_connection{
    //get all vessels from DB
    public function show_vessel_list(){
        //TODO remove condition in line 13
        $sql = 'SELECT v.ID, v.Name, v.Port, v.Principals, v.Agent, t.ETA ,t.ETD, t.ETC  
                FROM `vessels` v 
                INNER JOIN `times` t on v.ID = t.ID 
                AND v.ID > 17 
                ORDER BY v.ID DESC';

        $stmt = $this->connection()->query($sql);
        
        return $stmt->fetchAll();
    }
    //Get vessel with his ID from DB
    public function Get_vessel_info_ID($id){

        $sql = 'SELECT * FROM `vessels` v 
                INNER JOIN times t on v.ID = t.ID 
                INNER JOIN operations o on v.ID = o.ID 
                WHERE v.ID = '. $id .';';

        $stmt = $this->connection()->query($sql);
        
        return $stmt->fetchAll();
    }




}