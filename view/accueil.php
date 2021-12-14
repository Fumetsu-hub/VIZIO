<!DOCTYPE html>
<html lang="en">

<head>
    <title>accueil</title>
</head>

<body>
<?php
include('./utilitaire/bootstrap.php');
include('./utilitaire/barre_de_navigation.php');
?>
<br><br>
<div class="responsive_accueil card container shadow" style="border-width: 5px; background-color:white;"><br>
  <img class="card-img-top" src="./utilitaire/image.png" alt="Card image cap">
  <div class="card-body">
    <p style="text-align:center; font-weight: bold; font-size:25px; color:black;" class="card-text">Actions rapides</p><hr><br>
        <div style="text-align: center;" class = "container">
        <form action="./index.php" method="GET">
                <button type="submit" value="creer_dossier_patient" name="action" class="btn btn-primary">Crée un dossier patient</button>
        </form><br>
        <form action="./index.php" method="GET">
                <button type="submit" value="consultation" name="action" class="btn btn-primary">Crée une fiche consultation</button><br><a> (à venir)</a>
        </form><br>
        <form action="./index.php" method="GET">
                <button type="submit" value="questionnaire" name="action" class="btn btn-primary">Crée un questionnaire</button><br><a> (à venir)</a>
        </form>
        </div><br>
        <hr>
  </div>
</div>
<br>
</body>
</html>
