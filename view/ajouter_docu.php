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
  
<form action="./view/ajouter_docu.php" method="post" enctype="multipart/form-data">
        <p>
                ajouter un fichier image :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>

</form>

<?php

if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 10000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                       $toto= move_uploaded_file($_FILES['monfichier']['tmp_name'], 'site/');
                       if ($toto)
                       {
                        echo "L'envoi a bien été effectué !";
                       }
                       else
                       {
                        echo "L'envoi a raté";
                       }
                        
                         
 
                }
        }
 }     
?>
</div>
      </div>
      </form>
      </body>
</html>
