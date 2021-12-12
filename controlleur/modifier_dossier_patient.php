<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}
else {
    require('./model/modifier_dossier_patient.php');
}


$title = "modifier dossier patient";
    
require('./view/modifier_dossier_patient.php');

?>