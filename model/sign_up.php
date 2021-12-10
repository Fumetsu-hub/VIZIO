<!DOCTYPE html>

<?php
include('./db_connexion.php');
?>

 <?php

 if(isset($_POST['action']))
 {
    if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mdp']) and isset($_POST['mdp2']) and isset($_POST['email']) and isset($_POST['age']) and isset($_POST['sex']) and isset($_POST['tel']) and isset($_POST['statut']))
    {
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['mdp']) and !empty($_POST['mdp2']) and !empty($_POST['email']) and !empty($_POST['age']) and !empty($_POST['sex']) and !empty($_POST['tel']) and isset($_POST['statut']))  
        {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $mdp = htmlspecialchars($_POST['mdp']);
            $mdp2 = htmlspecialchars($_POST['mdp2']);
            $mail = htmlspecialchars($_POST['email']);
            $age = htmlspecialchars($_POST['age']);
            $sex = htmlspecialchars($_POST['sex']);
            $tel = htmlspecialchars($_POST['tel']);
            $statut = htmlspecialchars($_POST['statut']);
            
            //Vérification si l'email est déjà utilisée
            $sql = "SELECT mail FROM user WHERE mail = '$mail'";
            $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
            $recup_mail = mysqli_fetch_array($result);

            if(!empty($recup_mail['mail'])) // si email déjà utilisée
            {
                $erreur_email = "Le mail existe deja";
            }
            else  // si email libre, alors on continue
            {
                if($mdp == $mdp2)
                {
                    $sql = 'INSERT INTO user VALUES("", "'.$nom.'", "'.$prenom.'", "'.$mdp.'", "'.$mail.'", "'.$age.'", "'.$sex.'", "'.$tel.'", "'.$statut.'")';
                    mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
                    $succes = "Votre compte a bien été créé !";
                }
                else
                {
                    $erreur = "Vos mots de passe ne correspondent pas !";
                }
            }
        }
        
    }

  }

 ?>
