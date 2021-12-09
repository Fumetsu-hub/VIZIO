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
            <button type="submit" value="profil" name="action" class="btn btn-primary">Profil</button>
    </form><br><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="liste_dossier_patient" name="action" class="btn btn-primary">Liste des patients</button>
    </form><br>
</body>
</html>
