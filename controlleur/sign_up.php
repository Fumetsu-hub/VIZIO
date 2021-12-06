<?php

    require_once('./model/sign_up.php');

    if(isset($_POST['action']))
    {
        if(empty($_POST['mail']) AND empty($_POST['mdp']))
        {
                
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "INSCRIPTION";
    
    require_once('./view/sign_up.php');
?> 