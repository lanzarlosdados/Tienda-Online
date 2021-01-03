<?php

class StoreModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getProductos(){
        return $this->database->query("SELECT * FROM producto");
    }

    public function getCancion($id){
        $sql = "SELECT * FROM canciones where idCancion = " . $id;
        return $this->database->query($sql);
    }
}