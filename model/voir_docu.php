<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

 <?php
 $id_img = $_SESSION["id_user"];
 $sql_img = "SELECT doc_bin FROM document WHERE id = '$id_img'";
 $img_result =$base->query($sql_img);
 if($img_result->num_rows>0){
    $toto=$img_result->fetch_assoc();
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $toto['doc_bin'] ).'"/>';
 }
 else{
     echo("probleme");
 }
 ?>
 