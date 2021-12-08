<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

    $title = "Liste dossier patient";
    
    require_once('./view/liste_dossier_patient.php');
?>