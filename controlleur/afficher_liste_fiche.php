<?php

if (empty($_SESSION['id_user']) or $_SESSION['statut'] != "medecin")
{
    header('Location: ./index.php');
    exit();
}

    require_once('./model/afficher_liste_fiche.php');
  
    $title = "afficher fiche consultation";
    
    require_once('./view/afficher_liste_fiche.php');
?> 