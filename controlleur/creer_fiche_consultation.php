<?php

if (empty($_SESSION['id_user']) or $_SESSION['statut'] != "medecin")
{
    header('Location: ./index.php');
    exit();
}

require('./model/creer_fiche_consultation.php');

$title = "creer_fiche_consultation";
    
require('./view/creer_fiche_consultation.php');

?>