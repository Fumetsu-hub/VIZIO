<?php

if (empty($_SESSION['id_user']) or $_SESSION['statut'] != "medecin")
{
    header('Location: ./index.php');
    exit();
}

    require_once('./model/recherche_multicritere.php');
  
    $title = "recherche multicritere";
    
    require_once('./view/recherche_multicritere.php');
?> 