<?php

header('Access-Control-Allow-Origin: http://localhost:8080');
header('Content-Type: application/json');

include_once '../config/Db.php';
include_once '../models/Player.php';

$database= new Db();
$db= $database->connect();

$data=new Player($db);
$result= $data->getDataByPlayer();

$dataArray=array();

while($row=$result->fetch(PDO::FETCH_ASSOC)){
    array_push($dataArray,$row);
}

echo json_encode($dataArray);