<?php
include '../../Config/DB_connection.php';


class LineUps Extends DB_connection{

    //get vessel with cargo = fertilizer 
    public function fertilizer(){

       $sql = "SELECT * FROM `vessels` v 
       INNER JOIN `times` t on v.ID = t.ID 
       WHERE v.Cargo = 'FERTILIZER'";
       
       $stmt = $this->connection()->query($sql);

       return $stmt->fetchAll();
    }

    public function SULPHUR(){

        $sql = "SELECT * FROM `vessels` v 
        INNER JOIN `times` t on v.ID = t.ID 
        WHERE v.Cargo = 'SULPHUR'";
        
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }

    public function Tanker(){

        $sql = "SELECT * FROM `vessels` v 
        INNER JOIN `times` t on v.ID = t.ID 
        WHERE v.Cargo = 'TANKER'";
        
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }
}