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
<?php
        // Transforme la date americaine JJ/MM/AAAA
        $date = $info_patient['date_n'];
        $timestamp = strtotime($date);
        $date = date("d-m-Y", $timestamp);
?>

<div class="responsive_card card border-0 shadow rounded-3 my-5 container">
  <div class="card-body">

  <h2 style="text-align:center;">Dossier de : <?= $info_patient['nom']. " " . $info_patient['prenom']?> </h2></br>
    <li>Mail : <?= $info_patient['mail'] ?></li></br>
    <li>Téléphone : <?= $info_patient['tel'] ?></li></br>
    <li>Statut : <?php if($info_patient['statut'] == "patient"){echo"Patient";}else{echo"Médecin";} ?></li></br>
    <li>Date de naissance  : <?= $date;?></li></br>
    <li>Âge : <?= $info_patient['age'] ?> ans</li></br>
    <li>Sexe : <?php if($info_patient['sexe'] == "h"){echo"Homme";}else{echo"Femme";} ?></li>

    <br>
    <form action="./index.php" method="GET">
            <button type="submit" value="modifier_dossier_patient" name="action" class="btn btn-dark">Modifier dossier</button>
    </form><br>
    <form action="./index.php" method="GET">
                <button type="submit" value="afficher_liste_fiche" name="action" class="btn btn-dark">Fiches consultation</button><br>
        </form><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="Document" name="action" class="btn btn-dark">Document</button>
    </form><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="accueil" name="action" class="btn btn-danger">Quitter</button>
    </form><br>
  </div>
</div>

</body>
</html>