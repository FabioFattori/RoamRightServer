<?php

include "../Class/DB.php";
header('Access-Control-Allow-Origin: *');

$id=$_GET['ID'];
$Email=$_GET['E'];
$Pass=$_GET['P'];
PDOCommands::update_row("update utenti set Email=?,Password=? where ID=?",$Email,$Pass,$id);


?>