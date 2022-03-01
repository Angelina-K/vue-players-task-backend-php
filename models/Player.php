<?php

class Player {
    private $conn;
    private $table='players';

    public function __construct($db){
        $this->conn=$db;
    }

    public function getDataByBrand(){
        $sql = "SELECT brand as 'key', SUM(lifetimeDeposits) as deposits , SUM(earnings) as earnings FROM players GROUP BY brand;";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    
    public function getDataByPlayer(){
        $sql="SELECT 'player' as 'key' , earnings,lifetimeDeposits as deposits FROM players as player";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
}