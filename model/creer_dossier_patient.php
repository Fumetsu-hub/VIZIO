<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

 <?php

 if(isset($_POST['action']))
 {
    if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['date_n']) and isset($_POST['sexe']) and isset($_POST['telephone']))
    {
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['date_n']) and !empty($_POST['sexe']) and !empty($_POST['telephone']))
        {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $mail = htmlspecialchars($_POST['email']);
            $date_n = htmlspecialchars($_POST['date_n']);
            $sex = htmlspecialchars($_POST['sexe']);
            $tel = htmlspecialchars($_POST['telephone']);

            //Vérification si l'email est déjà utilisée
            $sql = "SELECT mail FROM user WHERE mail = '$mail'";  
            $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
            $recup_mail = mysqli_fetch_array($result);
            
            if(!empty($recup_mail['mail'])) // si email déjà utilisée
            {
              $erreur_email = "Le mail existe deja";
            }
            else
            {
              $sql = 'INSERT INTO user VALUES("", "'.$nom.'", "'.$prenom.'", "", "'.$mail.'", "'.$date_n.'", "'.$sex.'", "'.$tel.'", "pat")';
              mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
              $reussite = "Dossier patient créé !";
            }
        }
        
    }

  }

 ?>
