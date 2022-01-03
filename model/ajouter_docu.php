<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

<?php
 $id_img = $_SESSION["id_user"];
 $sql = 'INSERT INTO document (doc_bin) VALUES ($_FILES) WHERE doc = '.$id_img.'';
 $img_result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));

 ?>