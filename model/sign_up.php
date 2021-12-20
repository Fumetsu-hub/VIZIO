<!DOCTYPE html>

<?php
include('./utilitaire/db_connexion.php');
?>

 <?php

 if(isset($_POST['action']))
 {

    if(empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['mdp']) or empty($_POST['mdp2']) or empty($_POST['email']) or empty($_POST['date_n']) or empty($_POST['sex']) or empty($_POST['tel']) or empty($_POST['statut']))  
    {
        $erreur = "Veuillez remplir tous les champs !";
    }

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mdp2 = htmlspecialchars($_POST['mdp2']);
    $mail = htmlspecialchars($_POST['email']);
    $date_n = htmlspecialchars($_POST['date_n']);
    $sex = htmlspecialchars($_POST['sex']);
    $tel = htmlspecialchars($_POST['tel']);
    $statut = htmlspecialchars($_POST['statut']);

    if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mdp']) and isset($_POST['mdp2']) and isset($_POST['email']) and isset($_POST['date_n']) and isset($_POST['sex']) and isset($_POST['tel']) and isset($_POST['statut']))
    {
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['mdp']) and !empty($_POST['mdp2']) and !empty($_POST['email']) and !empty($_POST['date_n']) and !empty($_POST['sex']) and !empty($_POST['tel']) and isset($_POST['statut']))  
        {
            //Détermine l'âge
            $from = new DateTime($date_n);
            $to   = new DateTime('today');
            $age_verif = $from->diff($to)->y;

            //Vérification du nom (si il contient des chiffre)
            if (preg_match('/1|2|3|4|5|6|7|8|9/i', $nom)){$erreur_nom = "Votre nom n'est pas valide";unset($nom);}else{

            //Vérification du prénom (si il contient des chiffre)
            if (preg_match('/1|2|3|4|5|6|7|8|9/i', $prenom)){$erreur_prenom = "Votre prénom n'est pas valide";unset($prenom);}else{

            //vérification de l'âge
            if($age_verif <= 0 or $age_verif > 150){$erreur_date = "Votre date de naissance n'est pas valide";unset($date_n);}else{

            //Vérification du numéro de téléphone
            if(strlen($tel)!=10){$erreur_tel = "Le numéro de téléphone n'est pas valide";unset($tel);}else{

            //Vérification si l'email est déjà utilisée
            $sql = "SELECT mail FROM user WHERE mail = '$mail'";
            $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
            $recup_mail = mysqli_fetch_array($result);
            
            //Vérification de l'email
            if(!empty($recup_mail['mail'])){$erreur_email = "Le mail existe deja";unset($mail);}else{

            //Vérification que les mdp correspondent
            if($mdp != $mdp2){$erreur = "Vos mots de passe ne correspondent pas !";}else{

            //Si tout est bon, alors :
            $sql = 'INSERT INTO user VALUES("", "'.$nom.'", "'.$prenom.'", "'.$mdp.'", "'.$mail.'", "'.$date_n.'", "'.$sex.'", "'.$tel.'", "'.$statut.'")';
            mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
            $succes = "Votre compte a bien été créé !";
            header("Refresh:0; url=./index.php?action=LOGIN");
                
            }}}}}}
        }
    }
}

 ?>
