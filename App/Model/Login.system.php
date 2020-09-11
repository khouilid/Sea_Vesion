<?php

include '../../Config/DB_connection.php';


class Log_in Extends DB_connection{
    private $mail;
    private $password;

    public function __construct($mail, $password){
        $this->mail = $mail;
        $this->password = $password;
    }

    public function log_IN(){
        $sql = "SELECT * FROM `users` WHERE mail = ? and password = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt = $stmt->execute([$this->mail , $this->password]);
        print_r( $stmt->fetchAll());
       
    }



}

$test = new Log_in('dfhdj', 'lkdsfj');
$r = $test->log_IN();