<!DOCTYPE html>
<html lang="en">
<head>
    <title>Afficher document patient</title>
</head>
<body>
<?php
 // connexion à la base de données
 $base = mysqli_connect('localhost', 'root', '');
 mysqli_select_db($base, "vizio");
?>
<?php
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
include('./utilitaire/barre_de_navigation.php');
?>
<div class="responsive_card card border-0 shadow rounded-3 my-5 container">
  <div class="card-body">

  <html>
  
<form action="./model/ajouter_docu.php" method="post" enctype="multipart/form-data">
        <p>
                ajouter un fichier image :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>

</form>


</div>
      </div>
      </form>
      </body>
</html>
