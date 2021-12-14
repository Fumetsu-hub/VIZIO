<!DOCTYPE html>
<html lang="en">
<head>
    <title>Afficher dossier patient</title>
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

  <h2 style="text-align:center;">Dossier de : <?= $info_patient['nom']. " " . $info_patient['prenom']?> </h2></br>
    <li>Mail : <?= $info_patient['mail'] ?></li></br>
    <li>Telephone : <?= $info_patient['tel'] ?></li></br>
    <li>Statut : <?= $info_patient['statut'] ?></li></br>
    <li>Age : <?= $info_patient['age'] ?></li></br>
    <li>Sexe : <?= $info_patient['sexe'] ?></li>

    <br>
    <form action="./index.php" method="GET">
            <button type="submit" value="modifier_dossier_patient" name="action" class="btn btn-dark">Modifier dossier</button>
    </form><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="liste_dossier_patient" name="action" class="btn btn-dark">Retour</button>
    </form><br>
  </div>
</div>

</body>
</html>