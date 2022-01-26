<?php

if (empty($_SESSION['id_user']) or $_SESSION['statut'] != "medecin")
{
    header('Location: ./index.php');
    exit();
}  
    $title = "creation fiche consultation";
    
    require_once('./view/creation_fiche_consultation.php');
?> 