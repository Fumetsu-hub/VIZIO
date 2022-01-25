<!DOCTYPE html>
<html lang="en">
<head>
    <title>Afficher document patient</title>
</head>
<body>

<?php
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

<div class="responsive_card card border-0 shadow rounded-3 my-5 container">
  <div class="card-body">

  <?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>
<?php
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
 
 
 
 <br>
  <br>
    <form action="./index.php" method="GET">
            <button type="submit" value="ajouter" name="action" class="btn btn-dark">Ajouter document</button>
    </form><br>
    
    <form action="./index.php" method="GET">
            <button type="submit" value="supprimer_document" name="action" class="btn btn-dark">Supprimer document</button>
    </form><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="afficher_dossier_patient" name="action" class="btn btn-dark">Retour</button>
    </form><br>
  </div>
</div>

</body>
</html>