<?php

//localhost/RoamRightServer/Api/ModificaTappa.php?ID=1&N=NOmeProva&S=1&D=20

include '../Class/DB.php';
header('Access-Control-Allow-Origin: *');

$idOfTappa=$_GET['ID'];
$nome=$_GET['N'];
$Costo=$_GET['C']??0;
$Svolta=$_GET['S'];
$data=$_GET['D'];

PDOCommands::update_row("update tappa set tappa.Nome=?,tappa.Costo=?,tappa.Svolta=?,tappa.Data=? where ID=?",$nome,$Costo,$Svolta,$data,$idOfTappa);



?>