<html>
 <head>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>modifier dossier patient</title>
 </head>
<body>
<div class="container">
<br><br><h1 style="text-align:center;">Modification d'un Dossier Patient</h1><br><br>

<?php
    if(!empty ($erreur2))
    echo $erreur2."<br><br>";
?>

<form action = "" method = "POST" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nom</label>
      <input name = "nom" type="text" class="form-control" id="validationTooltip01" placeholder="Nom" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Prénom</label>
      <input name = "prenom" type="text" class="form-control" id="validationTooltip02" placeholder="Prénom" name  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="exampleInputEmail1">Email</label>
      <div class="input-group">
        <input name = "email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" required>
        <div class="invalid-tooltip">
          
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Âge</label>
      <input name = "age" type="text" class="form-control" id="validationTooltip03" placeholder="Âge" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Telephone</label>
      <input name = "telephone" type="number" class="form-control" id="validationTooltip04" placeholder="Telephone" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect2">Sexe</label>
    <select name = "sexe" class="form-control">
    <option>Homme</option>
    <option>Femme</option>
    </select>
    
    </div>
  </div>
  
  <button class="btn btn-primary" type="submit" value="modifier_dossier_patient" name="action">Modifier Dossier</button>
</form>
</div>

</body>
 </html>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>