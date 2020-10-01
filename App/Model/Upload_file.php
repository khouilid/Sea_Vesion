<?php
include '../../Config/DB_connection.php';

class Upload_file Extends DB_connection{

    public function upload($id, $destination){
        $sql = 'INSERT INTO `files`(`ID`, `Path`) VALUES (?,?)';
        $stmt = $this->connection()->prepare($sql);
        return $stmt->execute([$id, $destination]);
    }


   
    
}