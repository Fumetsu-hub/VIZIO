<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

 <?php

 if(isset($_POST['action']))
 {
    if(isset($_POST['email']) and isset($_POST['mdp']))
    {
        if(!empty($_POST['email']) and !empty($_POST['mdp']))
        {
            $email_connection = $_POST['email'];
            $mdp_connection = $_POST['mdp'];

            $sql = "SELECT mail FROM user WHERE mail = '$email_connection'";
            $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
            $data = mysqli_fetch_array($result);
            if(!empty($data['mail']) && $data['mail'] == $email_connection)
            {
                $reussite = "<br>Le mail est correcte<br>";
            }
            else
            {
                $erreur = "Rentrez un mail correspondant à un compte existant.";
            }

            $sql = "SELECT mdp FROM user WHERE mail = '$email_connection'";
            $result = mysqli_query($base, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($base));
            $data = mysqli_fetch_array($result);

            if(!empty($data['mdp']) && $data['mdp'] == $mdp_connection)
            {
                $reussite2 = "<br>Le mot de passe est correcte<br>";

                // récupère l'ID de l'utilisateur
                $sql = "SELECT id FROM user WHERE mail = '$email_connection'";
                $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
                $data = mysqli_fetch_array($result);
                $_SESSION['id_user'] = $data['id'];

                // récupere les informations de utilisateur
                $sql = "SELECT * FROM user WHERE mail = '$email_connection'";
                $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
                $data = mysqli_fetch_array($result);
                $_SESSION['nom'] = $data['nom'];
                $_SESSION['prenom'] = $data['prenom'];
                $_SESSION['mail'] = $data['mail'];
                $_SESSION['mdp'] = $data['mdp'];

            }
            else
            {
                $erreur2 = "Rentrez un mdp correspondant à l'email.";
            }

        }
        else
        {
            $erreur3 = "Veuillez remplir tous les champs !";
        }
    }
}

 ?>
