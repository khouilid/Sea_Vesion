<?php
include '../../Config/DB_connection.php';

class new_vessel Extends DB_connection{
    //first data 
    public $Agent;
    public $Principals;
    public $Vessel;
    public $Port;
    public $CARGO;
    public $QTY;
    public $DESTINATION;
    public $IMPORT_EXPORT;
   
    public $ETA;
    public $ETA_Comment;

    public $ARRIVAL_DRAFTS;
    public $BUNKERS_ON_ARRIVAL;


    public function __construct($Agent,$Principals,$Vessel,$Port,$IMPORT_EXPORT,$CARGO,$QTY,$DESTINATION,
                                  $ETA,$ETA_Comment,$ARRIVAL_DRAFTS,$BUNKERS_ON_ARRIVAL){
        $this->Agent = $Agent;
        $this->Principals = $Principals;
        $this->Vessel = $Vessel;
        $this->Port = $Port;
        $this->IMPORT_EXPORT = $IMPORT_EXPORT;
        $this->CARGO = $CARGO;
        $this->QTY = $QTY;
        $this->DESTINATION = $DESTINATION;
        $this->ETA = $ETA;
        $this->ETA_Comment = $ETA_Comment;
        $this->ARRIVAL_DRAFTS = $ARRIVAL_DRAFTS;
        $this->BUNKERS_ON_ARRIVAL = $BUNKERS_ON_ARRIVAL;
    }

    // this method return last id from db
    private function get_last_id($Vessel_name){
        $get_id = 'SELECT MAX(ID) FROM vessels WHERE name =  "'. $Vessel_name .'"';
        $stmt = $this->connection()->query($get_id);
        $id = $stmt->fetchAll();
        return $id[0]['MAX(ID)'];

    
    }
    // insert principal data into db 
    private function insert_vessel(){

        $sql = 'INSERT INTO `vessels`(`Name`, `Port`, `Qty`, `Cargo`, `Desti`, `Principals` , `IMPORT_EXPORT` ,`Agent`) VALUES (?,?,?,?,?,?,?,?);';

        $stmt = $this->connection()->prepare($sql);

        return $stmt->execute([$this->Vessel, $this->Port,$this->QTY,$this->CARGO,$this->DESTINATION,$this->Principals,$this->IMPORT_EXPORT, $this->Agent]);



    }
    // insert arrival time into db
    private function insert_time($id){
        $sql = 'INSERT INTO `times`(`ID`, `ETA`, `Commnet_1`) VALUES (?,?,?);';

        $stmt = $this->connection()->prepare($sql);

        return $stmt->execute([$id, $this->ETA,$this->ETA_Comment]);
    }



    private function insert_Operations($id){
        $sql = 'INSERT INTO `operations`(`ID`,`ARRIVAL_DRAFTS`, `BUNKERS_ON_ARRIVAL`) VALUES (?,?,?);';

        $stmt = $this->connection()->prepare($sql);

        return $stmt->execute([$id, $this->ARRIVAL_DRAFTS,$this->BUNKERS_ON_ARRIVAL]);
    }


    

    //call all methods of this class
    public function insert_new_vessel(){
        $this->insert_vessel();
        $id = $this->get_last_id($this->Vessel);
        $this->insert_time($id);
        $this->insert_Operations($id);
    }

}



























