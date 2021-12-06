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

 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' href="css/style.css">
    <script src='main.js'></script>

    <title>Inscription</title>
 </head>
     <body>
         <div align="center">
         <h2>Inscription</h2>
             <br></br>
         <form action="Inscription" method="post">
             <table>
                  <tr>
                     <td>
                         <label for="name">Name:</label><br>
                         <input type="text" name="nom" autocomplete="off">
                     </td>
                  </tr>
                  <tr>
                      <td>
                          <label for="name">Prenom:</label><br>
                          <input type="text" name="prenom" autocomplete="off">
                      </td>
                 </tr>
                 <tr>
                     <td>
                        <label for="mdp">Mot_de_passe:</label><br>
                        <input type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mdp">Confirmation_mot_de_passe:</label><br>
                         <input type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mail">E-mail:</label><br>
                         <input type="email" name="email" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mdp">Confirmation_mot_de_passe:</label><br>
                         <input type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 
                 <tr>
                     <td>
                         <label for="patient">Patient:</label><br>