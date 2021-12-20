<html>
 <head>
    <meta charset='utf-8'>
    <title>Inscription</title>
 </head>
    <body style="background-color:#f3f3f2;">
         <div align="center">
        <br><hr>
         <h2>Inscription</h2>
         <br>

         <?php
        // bootstrap
        include('./utilitaire/bootstrap.php');
        ?>

        <?php //Renvoi un msg d'erreur si la création du compte à échoué
            if(isset($erreur))
            {
                echo '<div class="alert alert-danger container w-25 p-3" role="alert">';
                echo $erreur;
                echo '</div>';
                unset($erreur);
            }
            if(isset($succes))
            {
                echo '<div class="alert alert-success container w-25 p-3" role="alert">';
                echo $succes;
                echo '</div>';
            }
            if(isset($erreur_email))
            {
                echo '<div class="alert alert-danger container w-25 p-3" role="alert">';
                echo $erreur_email;
                echo '</div>';
            }
            if(isset($erreur_tel))
            {
                echo '<div class="alert alert-danger container w-25 p-3" role="alert">';
                echo $erreur_tel;
                echo '</div>';
            }
            if(isset($erreur_date))
            {
                echo '<div class="alert alert-danger container w-25 p-3" role="alert">';
                echo $erreur_date;
                echo '</div>';
            }
            if(isset($erreur_nom))
            {
              echo '<div class="container alert alert-danger w-25 p-2" role="alert">';
              echo $erreur_nom;
              echo '</div>';
            } 
            if(isset($erreur_prenom))
            {
              echo '<div class="container alert alert-danger w-25 p-2" role="alert">';
              echo $erreur_prenom;
              echo '</div>';
            } 
        ?>
        <!-- Les balises php vont servir à pré-remplire le formulaire quand l'utilisateur se trompe -->
        
         <form action="" method="POST" >
             <table>
                  <tr>
                     <td>
                         <label for="name">Nom</label><br>
                         <input class="form-control" type="text" name="nom" value="<?php if(isset($nom))echo$nom; ?>">
                     </td>
                  </tr>
                  <tr>
                      <td>
                          <label for="name">Prenom</label><br>
                          <input class="form-control" type="text" name="prenom" value="<?php if(isset($prenom))echo$prenom; ?>">
                      </td>
                 </tr>
                 <tr>
                     <td>
                        <label for="mdp">Mot de passe</label><br>
                        <input class="form-control" type="password" name="mdp">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mdp">Confirmation mot de passe</label><br>
                         <input class="form-control" type="password" name="mdp2">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mail">E-mail</label><br>
                         <input class="form-control" type="email" name="email" value="<?php if(isset($mail))echo$mail; ?>">
                     </td>
                 </tr>
                
                 <tr>
                     <td>
                         <label for="date">Date de naissance</label><br>
                         <input class="form-control" type="date" name="date_n" value="<?php if(isset($date_n))echo$date_n; ?>">
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="sex">Sexe</label>
                         <select class="form-control" name="sex">
                         <option <?php if(isset($sex)and$sex=="h")echo"selected";?> value="h">Masculin</option>
                         <option <?php if(isset($sex)and$sex=="f")echo"selected";?> value="f">Feminin</option>
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="tel">Telephone</label>
                         <input class="form-control" type="tel" name="tel" value="<?php if(isset($tel))echo$tel; ?>">
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="statut">Statut</label>
                         <select class="form-control" name="statut">
                         <option <?php if(isset($statut)and$statut=="medecin")echo"selected";?> value="medecin">Medecin</option>
                         <option <?php if(isset($statut)and$statut=="patient")echo"selected";?> value="patient">Patient</option>
                     </td>
                 </tr>
                 <tr>
                     <td></td>
                     <td align="center">
                         <br/>
                     </td>
                 </tr>
             </table> 

            <form action="./index.php" method="GET">
                <button class="btn btn-success" type="submit" value="Inscription" name="action">S'inscrire</button>
            </form>
         </form>
        <br>
         <form action="./index.php" method="GET">
             <a class="form-text">Déjà enregistré ?</a>
            <button class="btn btn-primary" type="submit" value="LOGIN" name="action">Se connecter</button>
        </form>
        <hr>
 </body>
 </html>