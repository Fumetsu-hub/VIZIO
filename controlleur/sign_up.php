<?php

    require_once('./model/sign_up.php');

    if(isset($_POST['action']))
    {
        if(empty($_POST['email']) OR empty($_POST['mdp']) OR empty($_POST['nom']) OR empty($_POST['mdp2']) 
        OR empty($_POST['age']) OR empty($_POST['sex']) OR empty($_POST['tel']) OR empty($_POST['statut']))
        {
                
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "INSCRIPTION";
    
    require_once('./view/sign_up.php');
?> 