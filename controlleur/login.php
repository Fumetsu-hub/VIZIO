<?php

    require_once('./model/login.php');

    if (isset($_POST['mdp']) && $_POST['mail'])
    {
        if (user_check($_POST['mdp'] ,$_POST['mail']))
        {
            //echo 'connecté';

            $client = user_info($_POST['mail']);

            foreach(array('id_user','nom', 'prenom', 'mail') as $key )
            {
                $_SESSION[$key] = $client[$key];
            }
            
            header('Location: index.php?action=accueil');
            exit();
        }
        else 
            $erreur = "Le nom d'utilisateur ou le Mot de Pass est Incorrect";
        }

    if(isset($_POST['action']))
    {
        if(empty($_POST['mail']) AND empty($_POST['mdp']))
        {
                
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

  
    $title = "INSCRIPTION";
    
    require_once('./view/login.php');
?> 