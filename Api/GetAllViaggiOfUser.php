<?php

//localhost/RoamRightServer/Api/GetAllViaggiOfUser.php?ID=1

include "../Class/DB.php";

header('Access-Control-Allow-Origin: *');

$id=$_GET['ID'];

echo json_encode(PDOCommands::get_rows("Select * from viaggio where viaggio.ID_Utente=?",$id));

?>