

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste</title>
  </head>
  <body>      
    <div>Liste des profils</div>
    <table>
      
      <tr>
        <th>Nom</th> 
        <th>Prénom</th>
        <th>Voir le profil</th>
      </tr>
      
     <?php 
        include('user.php');
        foreach($afficher_profil as $a) {
    ?>
          <tr>          
            <td><?= $a['nom'] ?></td>
            <td><?= $a['prenom'] ?></td>
            <td><a href=".php?id=<?= $a['id'] ?>">Aller au profil</a></td>
          </tr>
    <?php
        }   
    ?>
    </table>
  </body>
</html>