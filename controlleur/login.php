<<<<<<< HEAD

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
>>>>>>> f8ece40b19d56e75dc77eda5f4b23a6c788dbdf2

 <?php

<<<<<<< HEAD
if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}
else {
    require('model\login.php');
}  
    require('.\view\profil.php');
}
?>
=======
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
                         <input type="text" name="patient" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="age">Age:</label><br>
                         <input type="age" name="age" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="sex">Sex:</label>
                         <select name="genre">
                         <option value="h">Mascuilin</option>
                         <option value="f">Feminin</option>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="tel">Tel:</label>
                         <input type="tel" name="tel" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="statut">Statut:</label>
                         <select name="genre">
                         <option value="med">Medecin</option>
                         <option value="pat">Patient</option>
                     </td>
                 </tr>
                 <tr>
                     <td></td>
                     <td align="center">
                         <br/>
                         <input type="submit" value="Je m'inscris">
                     </td>
                 </tr>
             </table> 
         </form>
     </div>
 </body>
 </html>
>>>>>>> f8ece40b19d56e75dc77eda5f4b23a6c788dbdf2
