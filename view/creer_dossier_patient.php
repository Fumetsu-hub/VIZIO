<html>
 <head>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>creer dossier patient</title>
 </head>
<body>

<?php
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
include('./utilitaire/barre_de_navigation.php');
?>

<div class="container">
<br><br><h1 style="text-align:center;">Création d'un Dossier Patient</h1><br><br>

<?php
  if(isset($erreur2))
  {
    echo '<div class="alert alert-danger w-25 p-2" role="alert">';
    echo $erreur2;
    echo '</div>';
  } 
  if(isset($reussite))
  {
    echo '<div class="alert alert-success w-25 p-2" role="alert">';
    echo $reussite;
    echo '</div>';
  } 
?>

<form action = "" method = "POST" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nom</label>
      <input name = "nom" type="text" class="form-control" id="validationTooltip01" placeholder="Nom" required>

    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Prénom</label>
      <input name = "prenom" type="text" class="form-control" id="validationTooltip02" placeholder="Prénom" name  required>

    </div>
    <div class="col-md-4 mb-3">
      <label for="exampleInputEmail1">Email</label>
      <div class="input-group">
        <input name = "email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" required>

      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Âge</label>
      <input name = "age" type="text" class="form-control" id="validationTooltip03" placeholder="Âge" required>

    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Telephone</label>
      <input name = "telephone" type="number" class="form-control" id="validationTooltip04" placeholder="Telephone" required>

    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect2">Sexe</label>
    <select name = "sexe" class="form-control">
    <option>Homme</option>
    <option>Femme</option>
    </select>
    
    </div>
  </div>
  
  <button class="btn btn-primary" type="submit" value="créer_dossier_patient" name="action">Créer Dossier</button>
</form>
</div>

</body>
 </html>