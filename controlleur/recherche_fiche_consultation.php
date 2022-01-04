<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

    //require_once('./model/recherche_fiche_consultation.php');
  
    $title = "recherche fiche consultation";
    
    require_once('./view/recherche_fiche_consultation.php');
?> 