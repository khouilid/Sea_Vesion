<?php


class Download_file Extends DB_connection{

    public function Download($id){

        $sql = 'SELECT Path FROM files WHERE ID = '. $id .'';
        $stmt = $this->connection()->query($sql);
        return $stmt->fetchAll();
    }


   
    
}