<?php

    require_once('./model/sign_up.php');

    if(isset($_POST['action']))
    {
        if(empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['mdp']) or empty($_POST['mdp2']) or empty($_POST['email']) or empty($_POST['age']) or empty($_POST['sex']) or empty($_POST['tel']) or empty($_POST['statut']))  
        {
            $erreur = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "INSCRIPTION";
    
    require_once('./view/sign_up.php');
?> 