<?php
    include('../utilitaire/bootstrap.php');
    include('../utilitaire/navbar.php');
?>
<div class=" mt-5 card container shadow" style="border-width:5px; width:50rem;">

<?php 
// Include the database configuration file  
include('../utilitaire/db_connexion.php');
 
// Get image data from database 
$result = $base->query("SELECT image FROM document ORDER BY id DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

<form action="./document_accueil.php" method="GET" class="mt-4">
    <button type="submit" value="" name="action" class="btn btn-primary">Retour</button><br>
</form>
</div>