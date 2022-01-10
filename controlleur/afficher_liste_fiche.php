<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

    require_once('./model/afficher_liste_fiche.php');
  
    $title = "recherche fiche consultation";
    
    require_once('./view/afficher_liste_fiche.php');
?> 