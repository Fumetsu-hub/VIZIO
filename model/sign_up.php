<!DOCTYPE html>

<?php
// connexion à la base de données
$base = mysqli_connect('localhost', 'root', '');
mysqli_select_db($base, "vizio");
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
         $mdp = sha1($_POST['mdp']);
         $mdp2 = sha1($_POST['mdp2']);
         $mail = htmlspecialchars($_POST['email']);
         $age = htmlspecialchars($_POST['age']);
         $sex = htmlspecialchars($_POST['sex']);
         $tel = htmlspecialchars($_POST['tel']);
         $statut = htmlspecialchars($_POST['statut']);
     } 
     if($mdp == $mdp2)
     {
        $sql = 'INSERT INTO user VALUES("", "'.$nom.'", "'.$prenom.'", "'.$mdp.'", "'.$mail.'", "'.$age.'", "'.$sex.'", "'.$tel.'", "'.$statut.'")';
        mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
        $erreur = "Votre compte a bien été créé !";
     }
     else
     {
         $erreur = "Vos mots de passe ne correspondent pas !";
     }
      
        
    }

  }

  if(isset($_POST['nom']))
  {
    echo "nom = ".$_POST['nom']."<br>";
  }
  if(isset($_POST['action']))
  {
    echo "nom = ".$_POST['nom']."<br>";
  }
  if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mdp']) and isset($_POST['mdp2']) and isset($_POST['email']) and isset($_POST['age']) and isset($_POST['sex']) and isset($_POST['tel']) and isset($_POST['statut']))
  {
    echo "nom = ".$_POST['nom']."<br>";

  }

 ?>
