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
                <button type="submit" value="recherche_multicritere" name="action" class="btn btn-primary">Recherche patient multicritère</button><br>
        </form>
        <form action="./index.php" method="GET" class="mt-4">
                <button type="submit" value="consultation" name="action" class="btn btn-primary">Créer une fiche consultation</button><br><a> (à venir)</a>
        </form>
        <form action="./index.php" method="GET" class="mt-4">
                <button type="submit" value="questionnaire" name="action" class="btn btn-primary">Créer un questionnaire</button><br><a> (à venir)</a>
        </form>
        </div>
        <hr>
  </div>
</div>
<br>
</body>
</html>

