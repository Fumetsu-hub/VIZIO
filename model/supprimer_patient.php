<?php
include('./db_connexion.php');

$id_patient = $_SESSION["id_dossier_patient"]; // récupère l'id de l'utilisateur

$requete = "DELETE FROM `user` WHERE id = $id_patient";
mysqli_query($base, $requete) or die('Erreur : '.$requete.'<br />'.mysqli_error($base));

include('./controlleur/liste_dossier_patient.php'); //renvoi vers la liste patient

?>