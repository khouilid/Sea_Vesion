<?php

include '../../Config/DB_connection.php';


class Log_in Extends DB_connection{
    public $mail;
    public $password;

    public function __construct($mail, $password){
        $this->mail = $mail;
        $this->password = $password;
    }
    //check if this accent exicte
    public function log(){
        $sql = "SELECT COUNT(ID) AS IS_USER FROM `users` WHERE mail = '". $this->mail ."' AND password = '". $this->password ."'";
        $stmt = $this->connection()->query($sql);
        $resutl = $stmt->fetchAll();
        return $resutl[0]['IS_USER'];
        
       
    }



}
