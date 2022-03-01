<?php

class Db {
    private $host="localhost";
    private $username="root";
    private $pwd="";
    private $dbname="test";
    private $conn;

    public function connect(){
    $this->conn=null;

    try{
        $this->conn= new PDO ('mysql:host='. $this->host . ';dbname=' . $this->dbname, $this->username, $this->pwd);
        $this->conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    }catch(PDOExeption $e ){
        echo 'Connection error:' . $e->getMessage();
    }
    return $this->conn;

    }

}