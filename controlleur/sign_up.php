<?php

    require_once('./model/sign_up.php');

    if(isset($_POST['action']))
    {
        if(empty($_POST['email']))
        {     
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "INSCRIPTION";
    
    require_once('./view/sign_up.php');
?> 