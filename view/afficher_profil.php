<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Profil</title>
</head>
<body>

<div class="card border-0 shadow rounded-3 my-5 container" style="width: 30rem;">
  <div class="card-body">

  <h2 style="text-align:center;">Profil de : <?= $_SESSION['nom']. " " . $_SESSION['prenom']?> </h2></br>
    <li>Mail : <?= $_SESSION['mail'] ?></li></br>
    <li>Telephone : <?= $_SESSION['tel'] ?></li></br>
    <li>Statut : <?= $_SESSION['statut'] ?></li></br>
    <li>Âge : <?= $_SESSION['age'] ?></li></br>
    <li>Sexe : <?= $_SESSION['sexe'] ?></li>

    <!--boutons-->
    <br>
    <form action="./index.php" method="GET">
            <button type="submit" value="modifier_profil" name="action" class="btn btn-dark">Modifier Profil</button>
    </form>
    <br>
    <form action="./index.php" method="GET">
            <button type="submit" value="supprimer_profil" name ="action" class="btn btn-danger">Supprimer profil</button>
    </form>

  </div>
</div>

</body>
</html>