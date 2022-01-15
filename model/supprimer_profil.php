<?php

include('./db_connexion.php');
    //supprimer
    if(isset($_POST['delete']))
    {
        $requete= $DB->query("DELETE FROM user WHERE : id = :id");
        $_SESSION['flash_message'] = "Ce compte à été supprimé";
        exit;
    }

include('./utilitaire/db_connexion.php');


$id_user = $_SESSION['id_user']; // récupère l'id de l'utilisateur

// Supprime les fiches consultation de l'utilisateur
$requete = "DELETE FROM `consultation` WHERE user2 = $id_user";
mysqli_query($base, $requete) or die('Erreur : '.$requete.'<br />'.mysqli_error($base));

// Supprime l'utilisateur et ses informations
$requete = "DELETE FROM `user` WHERE id = $id_user";
mysqli_query($base, $requete) or die('Erreur : '.$requete.'<br />'.mysqli_error($base));


include('./controlleur/sign_out.php'); //déconnecte une fois le profil supprimé

?>