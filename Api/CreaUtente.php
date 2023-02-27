<?php

//localhost/RoamRightServer/Api/CreaUtente.php?P=prova&E=mamma

include '../Class/DB.php';
header('Access-Control-Allow-Origin: *');

$Email=$_GET['E'];
$Pass= $_GET['P'];
//check if utente already exist
if(PDOCommands::get_row("Select * from utenti where utenti.Email=? && utenti.Password=?",$Email,$Pass)==null){
    
    echo json_encode(PDOCommands::update_row("INSERT INTO utenti (Email,Password) VALUES (?,?)",$Email,$Pass));
}
?>