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
                         <label for="name">Name:</label>
                         <input type="text" name="nom" autocomplete="off">
                     </td>
                  </tr>
                  <tr>
                      <td>
                          <label for="name">Prenom:</label>
                          <input type="text" name="prenom" autocomplete="off">
                      </td>
                 </tr>
                 <tr>
                     <td>
                        <label for="mdp">Mot_de_passe:</label>
                        <input type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mdp">Confirmation_mot_de_passe:</label>
                         <input type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mail">E-mail:</label>
                         <input type="email" name="email" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mdp">Confirmation_mot_de_passe:</label>
                         <input type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 
                 <tr>
                     <td>
                         <label for="patient">Patient:</label>
                         <input type="text" name="patient" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="age">Age:</label>
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