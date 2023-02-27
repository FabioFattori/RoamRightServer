<?php


include "../Class/DB.php";
header('Access-Control-Allow-Origin: *');

$idToDelete=$_GET['ID'];

PDOCommands::update_row("Delete from viaggio where ID=?",$idToDelete);

PDOCommands::update_row("Delete from tappa where ID_Viaggio=?",$idToDelete);

?>