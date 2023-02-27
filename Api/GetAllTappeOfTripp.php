<?php

//localhost/RoamRightServer/Api/GetAllTappeOfTripp.php?ID=1

include '../Class/DB.php';
header('Access-Control-Allow-Origin: *');

$idOfTrip=$_GET['ID'];

echo json_encode(PDOCommands::get_rows("Select * from tappa where tappa.ID_Viaggio=?",$idOfTrip));

?>