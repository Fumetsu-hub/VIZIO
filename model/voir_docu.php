<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

 <?php
 


 $res = $base->query("SELECT image FROM gallery WHERE id = {$_GET['']}");
    
    if($res->num_rows > 0){
        $img = $res->fetch_assoc();
        
        //Rendre l'image
        header("Content-type: image/jpg"); 
        echo $img['image']; 
    }else{
        echo 'Image non trouvée...';
    }

?>