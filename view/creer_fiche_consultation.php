
<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
include('./utilitaire/barre_de_navigation.php');
//popup recherche
include('./utilitaire/popup_recherche_fiche.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cours.css">
    <title>Fiche consultation</title>
    
</head>

<body>
     <div align="center">
     <h1>Fiche consultation</h1>
        <br></br>
        <form action="traitement.php" method="post">
             <label for="Date">Date:</label>
             <input type="date" name="Date" size="10"/>
             <br /><br />
             <label for="Bilan dialectique"><strong>Bilan dialectique:</strong></label>
               <br></br>
            
    <table border="1" cellpadding="2" cellspacing="1" height="100%" width="74px">
     <tr align="left">
         <th width="250px">   </th>
         <th colspan="2"  align="center">Manifestations</th>
         <th colspan="2"  align="center">Causes</th>
         <th  align="center">Pourquoi</th>
         <th  align="center">Reflexions</th>
     </tr>
     <tr align="left">
         <th width="250px">   </th>
         <th  align="center">Chaud</th>
         <th  align="center">froid</th>
         <th  align="center">Vide</th>
         <th  align="center">Plein</th>
         
     </tr>
     <tr>
        <td width="250px" align="center">  <textarea id="description1" name="Description" rows="3" cols="70"></textarea> </td>
         <td  align="center"> <textarea id="Chaud" name="Chaud1" rows="3"></textarea></td>
         <td  align="center"> <textarea id="Froid" name="Froid1" rows="3"></textarea></td>
         <td  align="center"> <textarea id="Vide" name="Vide1" rows="3"></textarea></td>
         <td align="center"> <textarea id="Plein" name="Plein1" rows="3"></textarea></td>
         
         <td align="center"> <textarea id="Pourquoi" name="Pourquoi1" rows="3"></textarea></td>
         <td align="center"> <textarea id="Reflexions" name="Reflexions1" rows="3"></textarea></td>
     </tr>
     </table>     
        <input type="submit" value="Valider" />
     </form>
        <br></br>
      <style>
          table{
              border-collapse:collapse;
        
          }
     </style>

</body>
</html>