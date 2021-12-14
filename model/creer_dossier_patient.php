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

            //Détermine l'âge
            $from = new DateTime($date_n);
            $to   = new DateTime('today');
            $age_verif = $from->diff($to)->y;

            //vérification de l'âge
            if($age_verif <= 0 or $age_verif > 150){$erreur_date = "Votre date de naissance n'est pas valide";unset($date_n);}else{

            //Vérification du numéro de téléphone
            if(strlen($tel)!=10){$erreur_tel = "Le numéro de téléphone n'est pas valide";unset($tel);}else{

            //Vérification si le mail est valide
            if(strpos($mail, "@") == FALSE){$erreur_email = "Le mail n'est pas valide";unset($mail);}else{

            //Cherche si le mail existe déjà dans la bdd
            $sql = "SELECT mail FROM user WHERE mail = '$mail'";  
            $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
            $recup_mail = mysqli_fetch_array($result);
              
            //Vérification si le mail est déjà utilisée
            if(!empty($recup_mail['mail'])){$erreur_email = "Le mail existe deja";unset($mail);}else{

            //Si tout est bon alors :
            $sql = 'INSERT INTO user VALUES("", "'.$nom.'", "'.$prenom.'", "", "'.$mail.'", "'.$date_n.'", "'.$sex.'", "'.$tel.'", "patient")';
            mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
            $reussite = "Dossier patient créé !";
      
            }}}}
        }
        
    }

  }
?>