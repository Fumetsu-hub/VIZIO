<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}
else {
    require('model\info_profil.php');
}
if(isset($_POST['delete_account']))
{
    require('controller\supprimer_compte.php'); 
}
else {
    $title = "Mon Compte";
    
    require('.\view\info_profil.php');
}
?>