<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

 <?php
 $id_img = $_SESSION["id_user"];
 $sql_img = "SELECT * FROM document WHERE doc = '.$id_img.'";
 $img_result = mysqli_query($base, $sql_img) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));


 while ($row = mysqli_fetch_array($img_result,MYSQLI_BOTH)) {
    echo "<img src=<?$image;?>>".$row['image']."'>";
    echo "<p>".$row['text']. "</p>";
}