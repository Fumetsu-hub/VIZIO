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

    <form action="./index.php" method="GET">
            <button type="submit" value="consultation" name="action" class="btn btn-primary">Crée une fiche consultation</button>
    </form><br><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="questionnaire" name="action" class="btn btn-primary">Crée un questionnaire</button>
    </form><br><br>
</body>
</html>
