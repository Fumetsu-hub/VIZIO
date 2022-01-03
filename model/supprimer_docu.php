<?php
include('./utilitaire/db_connexion.php');
include('./utilitaire/popup_document.php');

$id_user = $_SESSION["id_user"]; // récupère l'id de l'utilisateur

$requete = "DELETE FROM `document` WHERE doc = $id_user";
mysqli_query($base, $requete) or die('Erreur : '.$requete.'<br />'.mysqli_error($base));

include('./controlleur/voir_docu.php'); //renvoi vers la liste document

?>
