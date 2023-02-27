<?php

//localhost/RoamRightServer/Api/CreaViaggio.php?ID=1&N=Barcellona&I=291231&F=1231231

include '../Class/DB.php';
header('Access-Control-Allow-Origin: *');

$id=$_GET['ID'];
$Nome=$_GET['N'];
$inizio=$_GET['I'];
$fine=$_GET['F'];

echo json_encode(PDOCommands::update_row("Insert into viaggio (Nome,DataInizio,DataFine,ID_Utente) Values (?,?,?,?)",$Nome,$inizio,$fine,$id));

?>