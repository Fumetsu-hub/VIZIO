<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}
else 
{
    
    require('./model/voir_docu.php');
}

$title = "Voir document patient";

require('./view/voir_docu.php');

?>