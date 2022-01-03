<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}
else 
{ 
    require('./model/supprimer_docu.php');
}

$title = "Supprimer document";

?>