<?php

    require_once('../model/modifier_dossier_patient.php');

    if(isset($_POST['action']))
    {
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['date_n'])
        and !empty($_POST['telephone']) and !empty($_POST['sexe']))
        {
            $erreur2 = "Les champs sont remplis";

        }
        else
        {
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "modifier dossier patient";
    
    require_once('../view/modifier_dossier_patient.php');
?> 