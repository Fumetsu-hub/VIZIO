<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

$title = "Accueil document";

require('.\view\document_accueil.php');
?>