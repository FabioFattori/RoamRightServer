<?php

include "../Class/DB.php";
header('Access-Control-Allow-Origin: *');

$id=$_GET['ID'];
$nome=$_GET['N'];
$inizio=$_GET['I'];
$fine=$_GET['F'];

PDOCommands::update_row("update viaggio set Nome=?,DataInizio=?,DataFine=? where ID=?",$nome,$inizio,$fine,$id);


?>