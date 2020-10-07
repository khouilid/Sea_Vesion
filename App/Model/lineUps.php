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
//get vessel with cargo = sulphor
    public function SULPHUR(){

        $sql = "SELECT * FROM `vessels` v 
                INNER JOIN `times` t 
                on v.ID = t.ID 
                WHERE v.Cargo = 'SULPHUR'";
        
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }
//get vessel with cargo = tenker
    public function Tanker(){

        $sql = "SELECT * FROM `vessels` v 
                INNER JOIN `times` t 
                on v.ID = t.ID 
                WHERE v.Cargo = 'SULFURIC ACID' 
                OR v.Cargo = 'AMMONIA' 
                OR v.Cargo ='PHOS ACID'";
    
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }
//get vessel with cargo = grain
    public function Grain(){

        $sql = "SELECT * FROM `vessels` v 
                INNER JOIN `times` t 
                on v.ID = t.ID 
                WHERE v.Cargo = 'BARLEY' 
                OR v.Cargo = 'WHEAT' 
                OR v.Cargo ='SUGAR'
                OR v.Cargo ='CORN'
                ORDER BY v.ID DESC
                ";

    
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }
//get vessel with cargo = general
    public function General(){

        $sql = "SELECT * FROM `vessels` v 
                INNER JOIN `times` t 
                on v.ID = t.ID 
                WHERE v.Cargo = 'UREA + AMMONOTRAT' 
                OR v.Cargo = 'PETCKOK' 
                OR v.Cargo ='LAB'
                OR v.Cargo ='SULFATE AMMONIUM'
                OR v.Cargo ='SBM'
                OR v.Cargo ='COAL'
                OR v.Cargo ='SBPP'
                OR v.Cargo ='SCRAP'
                ORDER BY v.ID DESC
                ";
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }


    public function Bulk_terminal($type){

        $sql = "SELECT * FROM `vessels` v 
                INNER JOIN `times` t 
                on v.ID = t.ID 
                WHERE v.Port = '". $type ."'";
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }

    public function JorfLasfar_ferilizer(){

        $sql = "SELECT * FROM `vessels` v 
                INNER JOIN `times` t 
                on v.ID = t.ID 
                WHERE v.Port = 'JORF LASFAR' AND v.Cargo ='FERTILIZER'";
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }


    public function JorfLasfar_NOT_ferilizer(){

        $sql = "SELECT * FROM `vessels` v 
                INNER JOIN `times` t 
                on v.ID = t.ID 
                WHERE v.Port = 'JORF LASFAR' AND v.Cargo <> 'FERTILIZER'";
        $stmt = $this->connection()->query($sql);
 
        return $stmt->fetchAll();
    }

}