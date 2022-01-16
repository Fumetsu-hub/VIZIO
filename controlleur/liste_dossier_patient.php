<?php

if (empty($_SESSION['id_user']) or $_SESSION['statut'] != "medecin")
{
    header('Location: ./index.php');
    exit();
}
    require_once('./model/liste_dossier_patient.php');

    $title = "Liste dossier patient";
    
    require_once('./view/liste_dossier_patient.php');
?>