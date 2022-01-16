<?php

if (empty($_SESSION['id_user']) or $_SESSION['statut'] != "medecin")
{
    header('Location: ./index.php');
    exit();
}

require('./model/afficher_dossier_patient.php');

$title = "afficher dossier patient";
    
require('./view/afficher_dossier_patient.php');

?>