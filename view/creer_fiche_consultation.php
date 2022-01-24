
<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
if($_SESSION['statut'] == "medecin")
{
        include('./utilitaire/barre_de_navigation_medecin.php');
}
else
{
        include('./utilitaire/barre_de_navigation_patient.php');
}//popup recherche
include('./utilitaire/popup_recherche_fiche.php');
?>

<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="./css/liste_responsive.css">
         <title>Fiche consultation</title>
     </head>
         <body>
          <div align="center">
          <h1>Fiche consultation</h1>
         <br></br>
             <form action="traitement.php" method="post">
             <label for="Date">Date:</label>
             <input type="date" name="Date" size="10"/>
             <br></br>
             <label for="Bilan dialectique"><u><strong>Bilan dialectique:</u></strong></label>
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
                 <th align="center">   </th>
                 <th align="center">   </th>
                  </tr>
                 <tr>
                 <td width="250px" align="center">  <textarea id="description1" name="Description" rows="3" cols="50"></textarea> </td>
                 <td align="center"> <textarea id="Chaud" name="Chaud1" rows="3"></textarea></td>
                 <td align="center"> <textarea id="Froid" name="Froid1" rows="3"></textarea></td>
                 <td align="center"> <textarea id="Vide"  name="Vide1"  rows="3"></textarea></td>
                 <td align="center"> <textarea id="Plein" name="Plein1" rows="3"></textarea></td>
                 <td align="center"> <textarea id="Pourquoi" name="Pourquoi1" rows="3"></textarea></td>
                 <td align="center"> <textarea id="Reflexions" name="Reflexions1" rows="3"></textarea></td>
                  </tr>
                  <tr>
                  <td width="250px" align="center">  <textarea id="description1" name="Description" rows="3" cols="50"></textarea> </td>
                 <td align="center"> <textarea id="Chaud" name="Chaud1" rows="3"></textarea></td>
                 <td align="center"> <textarea id="Froid" name="Froid1" rows="3"></textarea></td>
                 <td align="center"> <textarea id="Vide"  name="Vide1"  rows="3"></textarea></td>
                 <td align="center"> <textarea id="Plein" name="Plein1" rows="3"></textarea></td>
                 <td align="center"> <textarea id="Pourquoi" name="Pourquoi1" rows="3"></textarea></td>
                 <td align="center"> <textarea id="Reflexions" name="Reflexions1" rows="3"></textarea></td>
                 </tr>    
                 </table>  
               <br></br>  
                 <input type="submit" value="Valider" />
             </form>
         <br></br>
             <style>
             table{
              border-collapse:collapse;
             }
             </style>
          <table border="1" cellpadding="2" cellspacing="1" height="100%" width="74px" align="right">
              <tr align="left">
                 <th><font color="blue">Profond</font> <font color="red">Superficiel</font></th>
                 <th>G</th>
                 <th width="250px">   </th>
                 <th>D</th>
                 <th width="250px">   </th>
                 </tr>
              <tr>
                  <td><b>Pouce</b></td>
                  <td> <font color="blue">C</font></td>
                  <td><textarea id="saisi_texte" name="Saisi" rows="3"></textarea></td>
                  <td> <font color="blue">P</font></td>
                  <td><textarea id="saisi_texte" name="Saisi" rows="3"></textarea></td>
             </tr>
             <tr>
                 <td><input type="checkbox" name="Pouce" value="Pouce" /> </td>
                 <td> <font color="red">IG</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
                 <td> <font color="red">GI</font></td>
                 <td><textarea id="sais_text" name="Saisi" rows="3"></textarea></td>
             </tr>  
             <tr>
                 <td><b>Barriere</b></td>
                 <td> <font color="blue">F</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
                 <td> <font color="blue">E</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
             </tr>
             <tr>
                 <td><input type="checkbox" name="Barriere" value="Barriere" /> </td>
                 <td> <font color="red">VB</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
                 <td> <font color="red">RP</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
             </tr>
             <tr>
                 <td><b>Pieds</b></td>
                 <td><font color="blue">R</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
                 <td><font color="blue">R</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
             </tr>
             <tr>
                 <td><input type="checkbox" name="Pieds" value="Pieds" />
                 <td><font color="red">V</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
                 <td><font color="red">V</font></td>
                 <td><textarea id="saisi_text" name="Saisi" rows="3"></textarea></td>
              </tr>
             </table>
           <div align="left">
             <label for="Pouls"><u>Pouls :</u></label> </br>
             <label><b>Général :</b></label> </br>
             <input type="radio" name="General" value="Profond" /> Profond <input type="radio" name="General" value="Médiant"/> Médiant <input type="radio" name="General" value="Superficiel" /> Superficiel <br/> 
             <input type="radio" name="General" value="Long" /> Long <input type="radio" name="General" value="Normal"/> Normal <input type="radio" name="General" value="Court" /> Court  <br/>
             <input type="radio" name="General" value="Lent"/>Lent <input type="radio" name="General" value="Bien"/>Bien <input type="radio" name="General" value="Rapide"/> Rapide<br/>
             <input type="radio" name="General" value="Glissant" /> Glissant (Glaire, Humidite) <br/>
             <input type="radio" name="General" value="Rugueux"/>Rugueux(Vide, Xue) <br/>

             <label><b>Appétit :</b></label> </br>
             <input type="radio" name="Appétit" value="Petit"/> Petit <input type="radio" name="Appétit" value="Normal"/> Normal <input type="radio" name="Appétit" value="Gargantuesque"/> Gargantuesque  <br/>

             <label><b>Soif :</b></label> </br>
             <input type="radio" name="Soif" value="Soif"/> Oui <input type="radio" name="Appétit" value="Non"/> Non<br/>
             
             <label><b>Type de boisson :</b></label> </br>
             <input type="radio" name="Type de boisson" value="Chaude"/>Chaude <input type="radio" name="Appétit" value="Froide"/> Froide<br/>
            
             <label><b>Transpiration :</b></label> </br>
             <input type="radio" name="Transpiration" value="Nocturne"/>Nocturne <input type="radio" name="Appétit" value="Diurne"/>Diurne <br/>
             <label for="Quand"> <b>Quand:</b></label>
             <textarea id="écrire une réponse" name="commentaire" rows="3"></textarea> </br>
                   
             <label><b>Teint :</b></label> </br>
             <input type="radio" name="Teint" value="Pâle"/> Pâle <input type="radio" name="Teint" value="Normal"/> Normal <input type="radio" name="Teint" value="Coloré"/> Coloré <br/>

             <label><b>Voix :</b></label> </br>
             <input type="radio" name="Voix" value="Faible"/> Faible <input type="radio" name="Appétit" value="Normale"/> Normale <input type="radio" name="Appétit" value="Forte"/> Forte <br/>

             <label><b>Lèvres :</b></label> </br>
             <input type="radio" name="Lèvres" value="Pâles"/>Pâles <input type="radio" name="Lèvres" value="Normales"/>Normales <input type="radio" name="Lèvres" value="Rouges"/>Rouges <input type="radio" name="Lèvres" value="Jaunes"/>Jaune <input type="radio" name="Lèvres" value="Pourpre"/>Pourpre<br/>
             <input type="radio" name="Lèvres" value="Sèches"/>Sèches <input type="radio" name="Lèvres" value="Humides"/>Humides <input type="radio" name="Lèvres" value="Gercées"/>Gercées<br/>
            
             <label><u>Langue :</u></label> </br>
             <label><b>Couleur :</b></label> </br>
             <input type="radio" name="Couleur" value="Pâle"/>Pâle <input type="radio" name="Couleur" value="Rouge"/>Rouge <input type="radio" name="Couleur" value="Jaune"/>Jaune <input type="radio" name="Couleur" value="Pourpre"/>Pourpre <br/>

             <label><b>Gonflée :</b></label> </br>
             <input type="radio" name="Gonflée" value="Sur les bords"/>Sur les bords <input type="radio" name="Gonflée" value="Partout"/>Partout <br/>

             <label><b>Fissure :</b></label> </br>
             <input type="radio" name="Fissure" value="Milieu courte"/>Milieu courte <input type="radio" name="Fissure" value="Milieu longue"/>Milieu longue <input type="radio" name="Fissure" value="Bord devant"/>Bord devant <br/>
             <input type="radio" name="Fissure" value="Point rouge"/>Point rouge <input type="radio" name="Fissure" value="Bout rouge"/>Bout rouge </br> 

             <label><b>Enduit :</b></label> </br>
             <input type="radio" name="Enduit" value="Pas"/>Pas <input type="radio" name="Enduit" value="Blanc"/>Blanc <input type="radio" name="Enduit" value="Jaune"/>Jaune</br>
             <input type="radio" name="Enduit" value="Mince"/>Mince <input type="radio" name="Enduit" value="Epais"/>Epais</br>
             <input type="radio" name="Enduit" value="Sec"/>Sec <input type="radio" name="Enduit" value="Humide"/>Humide</br> 
                   <br></br>
          <label><b>Synthèse :</b></label> </br>
             <br></br>
          <table border="1" cellpadding="2" cellspacing="1" height="100%" width="74px">
             <tr>
             <th>Chaud</th>
             <td>Froid</th>
             </tr>
             <tr>
             <td><textarea id="saisi_texte" name="Saisi" rows="2"></textarea></td>
             <td><textarea id="saisi_texte" name="Saisi" rows="2"></textarea></td>
             </tr>
             <tr>
             <th>Vide</th>
             <th>Plein</th>
             </tr>
             <tr>
             <td><textarea id="saisi_texte" name="Saisi" rows="2"></textarea></td>
             <td><textarea id="saisi_texte" name="Saisi" rows="2"></textarea></td>
             </tr>
             </table>
             <br></br>

          <label><b>Bilan Différentiel :</b></label></br>
           <td width="250px" align="center">  <textarea id="saisi_text" name="Commentaire" rows="10" cols="70"></textarea> </td>
           <br></br>
            <label><b>Mes tableaux de traitements :</b></label></br>
          <table border="1" cellpadding="2" cellspacing="1" height="100%" width="74px">
             <tr>
                  <td>Points</td>
                  <td>Pourquoi</td>
                  <td>Localisation</td>
             </tr>
             <tr>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
             </tr>
             <tr>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
             </tr>
             <tr>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
             </tr>
             <tr>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
             </tr>
             <tr>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
                 <td><textarea id="saisi_texte" name="Saisi" rows="3" cols="50"></textarea></td>
             </tr>
            </table>
         </body>
     </html>