<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

    require_once('./model/creer_dossier_patient.php');

    if(isset($_POST['action']))
    {
        if(empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['email']) or empty($_POST['date_n'])
        or empty($_POST['telephone']) or empty($_POST['sexe']))
        {
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "creer dossier patient";
    
    require_once('./view/creer_dossier_patient.php');
?> 