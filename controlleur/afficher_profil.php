<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}


$title = "Mon Compte";
    
require('./view/afficher_profil.php');

?>