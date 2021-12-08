<html>
 <head>
    <meta charset='utf-8'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 </head>
     <body>

<div class="container">

<br><br><br><br><br><hr><br>

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
</div>

 </body>
 </html>