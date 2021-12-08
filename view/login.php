<html>
 <head>
    <title>Login</title>
 </head>
<body>
<?php include('./utilitaire/bootstrap.php'); ?>

<div class="container">

<br><br><hr><br>

<h1 style="text-align:center">Connexion</h1>
<br>

<?php //Renvoi un msg d'erreur si il manque un champ
  if(isset($erreur3))
  {
    echo '<div class="alert alert-danger container w-25 p-2" role="alert">';
    echo $erreur3;
    echo '</div>';
  }
?>

<form action="" method="POST">
    <div class="form-group">
      <label for="email">E-mail</label>
      <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
      <?php
      if(isset($erreur))
      {
        echo '<div class="alert alert-danger w-50 p-1" role="alert">';
        echo $erreur;
        echo '</div>';
      } 
      else if(isset($reussite)) // a retirer quand l'accueil sera terminé
      {
        echo '<div class="alert alert-success w-50 p-1" role="alert">';
        echo $reussite;
        echo '</div>';
      }
      ?>
    </div><br>
    <div class="form-group">
      <label for="mdp">Mot de passe</label>
      <input name="mdp" type="password" class="form-control" id="mdp" placeholder="Mot de passe">
      <?php
      if(isset($erreur2))
      {
        echo '<div class="alert alert-danger w-50 p-1" role="alert">';
        echo $erreur2;
        echo '</div>';        
      }
      else if(isset($reussite2)) // a retirer quand l'accueil sera terminé
      {
        echo '<div class="alert alert-success w-50 p-1" role="alert">';
        echo $reussite2;
        echo '</div>';
        header('Refresh: 0; URL=index.php?action=accueil');
      }
      ?>
    </div><br>
    <button name="action" value="LOGIN" type="submit" class="btn btn-success">Se connecter</button>

</form>
<br>
<form action="./index.php" method="GET">
            <a class="form-text">Pas de compte?</a>
            <button type="submit" value="Inscription" name="action" class="btn btn-primary">S'inscrire</button>
    </form><br>
    <hr><br>
    <form action="./index.php" method="GET">
            <button type="submit" value="modifier_profil" name="action" class="btn btn-dark">Modifier Profil</button> <a>Faut etre connecté avant (A mettre sur l'accueil)</a>
    </form>
    <form action="./index.php" method="GET">
            <button type="submit" value="afficher_profil" name="action" class="btn btn-dark">Afficher Profil</button> <a>Faut etre connecté avant (A mettre sur l'accueil)</a>
    </form>
</div>

 </body>
 </html>