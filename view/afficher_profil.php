<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profil</title>
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
        $date = $_SESSION['date_n'];
        $timestamp = strtotime($date);
        $date = date("d-m-Y", $timestamp);
?>

<div class="card border-0 shadow rounded-3 my-5 container" style="width: 30rem;">
  <div class="card-body">

  <h2 style="text-align:center;">Profil de : <?= $_SESSION['nom']. " " . $_SESSION['prenom']?> </h2></br>
    <li>Mail : <?= $_SESSION['mail'] ?></li></br>
    <li>Téléphone : <?= $_SESSION['tel'] ?></li></br>
    <li>Statut : <?php if($_SESSION['statut'] == "patient"){echo"Patient";}else{echo"Médecin";} ?></li></br>
    <li>Date de naissance  : <?= $date;?></li></br>
    <li>Âge : <?= $_SESSION['age'] ?> ans</li></br>
    <li>Sexe : <?php if($_SESSION['sexe'] == "h"){echo"Homme";}else{echo"Femme";} ?></li>

    <!--boutons-->
    <br>
    <form action="./index.php" method="GET">
            <button type="submit" value="modifier_profil" name="action" class="btn btn-dark">Modifier Profil</button>
    </form><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="LOGOUT" name="action" class="btn btn-danger">Se déconnecter</button>
    </form>
    <br>

  </div>
</div>

</body>
</html>