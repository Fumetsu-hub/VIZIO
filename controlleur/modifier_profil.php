<?php

if (empty($_SESSION['id_user']))
{
    header('Location: index.php');
    exit();
}
else {
    require('./model/modifier_profil.php');
}


$title = "Mon Compte";
    
require('./view/modifier_profil.php');

?>