<!DOCTYPE html>

<?php
// connexion à la base de données
$base = mysqli_connect('localhost', 'root', '');
mysqli_select_db($base, "vizio");
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
                $erreur = "<br>Le mail est correcte<br>";
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
                $erreur2 = "<br>Le mot de passe est correcte<br>";
            }
            else
            {
                $erreur2 = "Rentrez un mdp correspondant.";
            }
        }
    }
}

 ?>
