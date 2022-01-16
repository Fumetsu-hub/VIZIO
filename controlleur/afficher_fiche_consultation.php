<?php

if (empty($_SESSION['id_user']) or $_SESSION['statut'] != "medecin")
{
    header('Location: ./index.php');
    exit();
}

require('./model/afficher_fiche_consultation.php');

$title = "afficher fiche consultation";
    
require('./view/afficher_fiche_consultation.php');

?>