<?php

    require_once('../model/creer_dossier_patient.php');

    if(isset($_POST['action']))
    {
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['age'])
        and !empty($_POST['telephone']) and !empty($_POST['sexe']))
        {
            $erreur2 = "Les champs sont remplis";

        }
        else
        {
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "creer dossier patient";
    
    require_once('../view/creer_dossier_patient.php');
?> 