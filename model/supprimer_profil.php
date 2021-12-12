<?php
include('./utilitaire/db_connexion.php');

$id_user = $_SESSION['id_user']; // récupère l'id de l'utilisateur

$requete = "DELETE FROM `user` WHERE id = $id_user";
mysqli_query($base, $requete) or die('Erreur : '.$requete.'<br />'.mysqli_error($base));

include('./controlleur/sign_out.php'); //déconnecte une fois le profil supprimé

?>