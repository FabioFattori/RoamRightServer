<?php

include "../Class/DB.php";
header('Access-Control-Allow-Origin: *');

$idToDelete=$_GET['ID'];

//Cancella utente
PDOCommands::update_row("Delete from utenti where ID=?",$idToDelete);





//Cancella tutti i viaggi
$ViaggiCreatiDaUtente=PDOCommands::get_rows("Select * from viaggio where viaggio.ID_Utente=?",$idToDelete);
for($i=0;$i<count($ViaggiCreatiDaUtente);$i++){
    
    PDOCommands::update_row("Delete from viaggio where ID_Utente=?",$ViaggiCreatiDaUtente[$i]["ID_Utente"]);

    //cancella tutte le tappe del singolo viaggio
        
    $TappeCreateDaUtente=PDOCommands::get_rows("Select * from tappa where ID_Viaggio=?",$ViaggiCreatiDaUtente[$i]["ID"]);

    for ($f=0; $f < count($TappeCreateDaUtente); $f++) { 
        PDOCommands::update_row("Delete from tappa where ID_Viaggio=?",$TappeCreateDaUtente[$f]["ID_Viaggio"]);

    }


}




?>