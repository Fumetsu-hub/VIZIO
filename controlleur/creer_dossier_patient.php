<?php

if (empty($_SESSION['id_user']) or $_SESSION['statut'] != "medecin")
{
    header('Location: ./index.php');
    exit();
}

    require_once('./model/creer_dossier_patient.php');
  
    $title = "creer dossier patient";
    
    require_once('./view/creer_dossier_patient.php');
?> 