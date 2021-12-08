<!DOCTYPE html>

<?php
// connexion à la base de données
include('./db_connexion.php');
?>

 <?php

 if(isset($_POST['action']))
 {
    if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['age']) and isset($_POST['sexe']) and isset($_POST['telephone']))
    {
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['age']) and !empty($_POST['sexe']) and !empty($_POST['telephone']))
      {
          $nom = htmlspecialchars($_POST['nom']);
          $prenom = htmlspecialchars($_POST['prenom']);
          $mail = htmlspecialchars($_POST['email']);
          $age = htmlspecialchars($_POST['age']);
          $sex = htmlspecialchars($_POST['sexe']);
          $tel = htmlspecialchars($_POST['telephone']);

          $sql = 'INSERT INTO user VALUES("", "'.$nom.'", "'.$prenom.'", "", "'.$mail.'", "'.$age.'", "'.$sex.'", "'.$tel.'", "pat")';
          mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
          $reussite = "Dossier patient créé !";
      }
        
    }

  }

 ?>
