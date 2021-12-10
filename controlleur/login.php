<?php

    require_once('./model/login.php');

    if(isset($_POST['action']))
    {
        if(empty($_POST['email']) AND empty($_POST['mdp']))
        {
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "login";
    
    require_once('./view/login.php');
?> 
