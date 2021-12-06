<?php
if (empty($_SESSION['id_user']))
{
    require('model\login.php');  
    require('.\view\profil.php');
}
?>
