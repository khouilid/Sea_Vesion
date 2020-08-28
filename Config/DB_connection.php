<?php


Abstract class DB_connection{
       //create private propertiese  conatine the db informations 
       private $host = 'localhost';
       private $user = 'root';
       private $pwd = '';
       private $dbName = 'sea_vesion';
       //craete a method contiane PDO connection
       protected function connection() {
           $dsn = 'mysql:host='. $this->host .';dbname='. $this->dbName;
           $Pdo = new PDO($dsn,$this->user, $this->pwd);
           // set an attribute to the request , all the request will get in form of an array 
           $Pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
           return $Pdo;
       }
}