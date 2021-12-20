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
  if(isset($erreur_email))
  {
    echo '<div class="container alert alert-danger container w-25 p-3" role="alert">';
    echo $erreur_email;
    echo '</div>';
  }
  if(isset($erreur2))
  {
    echo '<div class="container alert alert-danger w-25 p-2" role="alert">';
    echo $erreur2;
    echo '</div>';
  } 
  if(isset($reussite))
  {
    echo '<div class="container alert alert-success w-25 p-2" role="alert">';
    echo $reussite;
    echo '</div>';
  } 
  if(isset($erreur_tel))
  {
    echo '<div class="container alert alert-danger w-25 p-2" role="alert">';
    echo $erreur_tel;
    echo '</div>';
  } 
  if(isset($erreur_date))
  {
    echo '<div class="container alert alert-danger w-25 p-2" role="alert">';
    echo $erreur_date;
    echo '</div>';
  } 
  if(isset($erreur_nom))
  {
    echo '<div class="container alert alert-danger w-25 p-2" role="alert">';
    echo $erreur_nom;
    echo '</div>';
  } 
  if(isset($erreur_prenom))
  {
    echo '<div class="container alert alert-danger w-25 p-2" role="alert">';
    echo $erreur_prenom;
    echo '</div>';
  } 
?>

<form action = "" method = "POST" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nom</label>
      <input name = "nom" type="text" class="form-control" placeholder="Nom" value="<?php if(isset($nom))echo$nom; ?>" required>

    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Prénom</label>
      <input name = "prenom" type="text" class="form-control" placeholder="Prénom" value="<?php if(isset($prenom))echo$prenom; ?>" required>


    </div>
    <div class="col-md-4 mb-3">
      <label for="mail">Email</label>
      <div class="input-group">
        <input name="email" type="email" class="form-control" placeholder="Email" value="<?php if(isset($mail))echo$mail; ?>" required>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-5 mb-3">
      <label for="validationTooltip03">Date de naissance</label>
      <input name = "date_n" type="date" class="form-control" id="validationTooltip03" value="<?php if(isset($date_n))echo$date_n; ?>" required>

    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Telephone</label>
      <input name = "telephone" type="number" class="form-control" id="validationTooltip04" placeholder="Telephone" value="<?php if(isset($tel))echo$tel; ?>" required>

    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect2">Sexe</label>
    <select name = "sexe" class="form-control">
    <option <?php if(isset($sex)and$sex=="h")echo"selected";?> value="h">Masculin</option>
    <option <?php if(isset($sex)and$sex=="f")echo"selected";?> value="f">Feminin</option>
    </select>
    
    </div>
  </div>
  
  <button class="btn btn-primary" type="submit" value="créer_dossier_patient" name="action">Créer Dossier</button>
</form><br>
<form action="./index.php" method="GET">
  <button type="submit" value="liste_dossier_patient" name="action" class="btn btn-dark">Retour</button>
</form><br>

</div>

</body>
 </html>