<!DOCTYPE html>
 <?php

 $bdd = new PDO('mysql:host=localhost;dbname=vizio', 'root', '');
 
 if(isset($_POST['forminscription']))
 {
   if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mdp']) and isset($_POST['mdp2']) and isset($_POST['email']) and isset($_POST['patient']) and isset($_POST['age']) and isset($_POST['sex']) and isset($_POST['tel']) and isset($_POST['statut']))
    
     {
       if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['mdp']) and !empty($_POST['mdp2']) and !empty($_POST['email']) and !empty($_POST['patient']) and !empty($_POST['age']) and !empty($_POST['sex']) and !empty($_POST['tel']) and isset($_POST['statut']))  
     {
         $name = htmlspecialchars($_POST['nom']);
         $prenom = htmlspecialchars($_POST['prenom']);
         $mdp = sha1($_POST['mdp']);
         $mdp2 = sha1($_POST['mdp2']);
         $email = htmlspecialchars($_POST['email']);
         $patient = htmlspecialchars($_POST['patient']);
         $age = htmlspecialchars($_POST['age']);
         $sex = htmlspecialchars($_POST['sexe']);
         $tel = htmlspecialchars($_POST['tel']);
         $statut = htmlspecialchars($_POST['statut']);   
     } 
     if($mdp == $mdp2)
     {
       $insert = $bdd->prepare("INSERT INTO user(nom, prenom, mdp, mail, age, sexe, tel, statut) VALUES(nom, prenom, mdp, mail, age, sexe, tel, statut)");
       $insert->execute(array($nom, $prenom, $mdp, $mail, $age, $sexe, $tel, $statut  ));
       $erreur = "Votre compte a bien été créé !";
     }
     else
     {
         $erreur = "Vos mots de passe ne correspondent pas !";
     }
      
        
    }

  }

 ?>
