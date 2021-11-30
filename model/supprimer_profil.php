<?php
include('db_connexion.php');
    //suuprimer
    if(isset($_POST['delete']))
    {
        $requete= $DB->query("DELETE FROM user WHERE : id = id");
        alert("le compte a bien était supprimer");
        exit;
    }
    
?>