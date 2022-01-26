<!DOCTYPE html>
<link rel="stylesheet" href="./css/liste_responsive.css">

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
if($_SESSION['statut'] == "medecin")
{
        include('./utilitaire/barre_de_navigation_medecin.php');
}
else
{
        include('./utilitaire/barre_de_navigation_patient.php');
}?>

<div class="mt-5 card container shadow" style="border-width:5px; width:70rem;">

<?php 
// Include the database configuration file  
include('./utilitaire/db_connexion.php');
 
// Get image data from database 
if(isset($_SESSION['id_dossier_patient']))
{
  $use_id = $_SESSION["id_dossier_patient"];
}
else if(isset($_SESSION['id_user']))
{
  $use_id = $_SESSION["id_user"];
}
$result = $base->query("SELECT image FROM document WHERE id='$use_id' ORDER BY id DESC");
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Aucune fiche consultation trouvée...</p>
<?php } ?>
</div>
<div class="pb-5  "></div>