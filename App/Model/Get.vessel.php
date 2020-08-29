<?php

include '../../Config/DB_connection.php';


class Get_vessel Extends DB_connection{

    public function show_vessel_list(){

        $sql = 'SELECT v.ID, v.Name, v.Port, v.Principals, v.Agent, t.ETA ,t.ETD, t.ETC  FROM `vessels` v INNER JOIN `times` t on v.ID = t.ID AND v.ID > 17';
        $stmt = $this->connection()->query($sql);

        return $stmt->fetchAll();
    }

}