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
 $id_img = $_SESSION["id_dossier_patient"];
 $sql_img = "SELECT image FROM document WHERE id = '$id_img'";
 $img_result =$base->query($sql_img);
 if($img_result->num_rows>0){
    $toto=$img_result->fetch_assoc();
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $toto['doc_bin'] ).'"/>';
 }
 else{
     echo("Il n'y a aucun document a consulter");
 }
 ?>
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