<?php

//localhost/RoamRightServer/Api/CreaTappa.php?ID=1&N=nome&C=10&S=0&D=20

include '../Class/DB.php';
header('Access-Control-Allow-Origin: *');

$idOfTrip=$_GET['ID'];
$nome=$_GET['N'];
$Costo=$_GET['C']??0;
$Svolta=$_GET['S'];
$data=$_GET['D'];


PDOCommands::update_row("insert into tappa (Nome,Costo,Svolta,ID_Viaggio,Data) Values (?,?,?,?,?)",$nome,$Costo,$Svolta,$idOfTrip,$data);



?>