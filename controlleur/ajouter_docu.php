<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}
else 
{
    
    require('./model/ajouter_docu.php');
}

$title = "Ajouter document patient";

require('./view/ajouter_docu.php');

?>