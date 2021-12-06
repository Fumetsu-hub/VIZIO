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
         <h2>REGISTER</h2>

         <?php // affiche si le compte est créé ou si il y a une erreure
        if(isset($erreur))
        {
            echo '<div class = "erreur">' . $erreur . '</div>';
        }
        ?>

        <br>
         <form action="" method="POST">
             <table>
                  <tr>
                     <td>
                         <label for="name">Nom:</label><br>
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
                        <label for="mdp">Mot de passe:</label><br>
                        <input type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mdp">Confirmation mot de passe:</label><br>
                         <input type="password" name="mdp2" autocomplete="off">
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
                         <label for="age">Age:</label><br>
                         <input type="age" name="age" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="sex">Sexe:</label>
                         <select name="sex">
                         <option value="h">Masculin</option>
                         <option value="f">Feminin</option>
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="tel">Telephone:</label>
                         <input type="tel" name="tel" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="statut">Statut:</label>
                         <select name="statut">
                         <option value="med">Medecin</option>
                         <option value="pat">Patient</option>
                     </td>
                 </tr>
                 <tr>
                     <td></td>
                     <td align="center">
                         <br/>
                     </td>
                 </tr>
             </table> 
             <input type="submit" value="Inscription" name="action"><br><br>

         </form>

         <form action="./index.php" method="GET">
            <input type="submit" id='submit' value='LOGIN' name='action' >
        </form>

     </div>
 </body>
 </html>