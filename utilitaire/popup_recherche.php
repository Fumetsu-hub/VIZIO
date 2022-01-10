<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sliding Modal Box Style</title>
      <link rel="stylesheet" href="./css/popup.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   <body>
   <?php
   // bootstrap
   include('./utilitaire/bootstrap.php');
   ?>

      <div class="center modal-box">
         <div class="fas fa-times"></div>
         <p style="font-size:20px; font-weight: bold; color: black;">
            Recherche :
         </p>
<!------------------------------------------->
<form action = "" method = "POST" class="needs-validation" novalidate>
  <div class="form-row">

    <div class="">
      <label for="validationTooltip01">Nom</label>
      <input name = "nom" type="text" class="form-control" placeholder="Nom" required>
    </div>

    <div class="mt-3">
      <label for="validationTooltip02">Prénom</label>
      <input name = "prenom" type="text" class="form-control" placeholder="Prénom" required>
    </div>

    <div class="mt-3">
    <label for="exampleFormControlSelect2">Sexe</label>
    <select name = "sexe" class="form-control">
    <option value="">Vide</option>
    <option value="h">Masculin</option>
    <option value="f">Feminin</option>
    </select>
    </div>

  </div>
  
  <button class="mt-4 btn btn-primary" type="submit" value="recherche_multicritere" name="action">Rechercher</button>
</form><br>
<!------------------------------------------->


      </div>
      <script>
         $(document).ready(function(){
           $('.popup-btn').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.popup-btn').toggleClass("show-modal");
           });
           $('.fa-times').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.popup-btn').toggleClass("show-modal");
           });
         });
      </script>
   </body>
</html>