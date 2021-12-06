<html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' href="css/style.css">
    <script src='main.js'></script>

    <title>Login</title>
 </head>
     <body>
         <div align="center">
         <h2>Connexion</h2>

         <?php // affiche si le compte est créé ou si il y a une erreure
        if(isset($erreur))
        {
            echo '<div class = "erreur">' . $erreur . '</div>';
        }
        if(isset($erreur2))
        {
            echo '<div class = "erreur">' . $erreur2 . '</div>';
        }
        ?>

        <br>
         <form action="" method="POST">
             <table>
                 <tr>
                     <td>
                        <label for="mdp">Mot de passe:</label><br>
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
                     <td></td>
                     <td align="center">
                         <br/>
                     </td>
                 </tr>
             </table> 
             <input type="submit" value="login" name="action"><br><br>

         </form>

         <form action="./index.php" method="GET">
            <input type="submit" id='submit' value='Inscription' name='action' >
        </form>

     </div>
 </body>
 </html>
