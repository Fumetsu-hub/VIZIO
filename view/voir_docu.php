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
include('./utilitaire/barre_de_navigation.php');
?>
<div class="responsive_card card border-0 shadow rounded-3 my-5 container">
  <div class="card-body">


  

  <br>
    <form action="./index.php" method="GET">
            <button type="submit" value="ajouter" name="action" class="btn btn-dark">Ajouter document</button>
    </form><br>
    <br>
    <form action="./index.php" method="GET">
            <button type="submit" value="Document" name="action" class="btn btn-dark">Document</button>
    </form><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="afficher_dossier_patient" name="action" class="btn btn-dark">Retour</button>
    </form><br>
  </div>
</div>

</body>
</html>