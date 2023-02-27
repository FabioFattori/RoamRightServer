<?php

include "../Class/DB.php";
header('Access-Control-Allow-Origin: *');

$idOfTrip=$_GET['ID'];

PDOCommands::update_row("Delete from tappa where ID=?",$idOfTrip);


?>