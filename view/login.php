<html>
 <head>
    <meta charset='utf-8'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
 </head>
     <body>

<div class="container">

<br><br><br><br><br><br>

<h1 style="text-align:center">Connexion</h1>

<br>
<form action="" method="POST">
    <div class="form-group">
      <label for="email">E-mail</label>
      <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
      <?php
      if(isset($erreur))
        {
            echo $erreur;
        } 
      ?>
    </div><br>
    <div class="form-group">
      <label for="mdp">Mot de passe</label>
      <input name="mdp" type="password" class="form-control" id="mdp" placeholder="Mot de passe">
      <?php
      if(isset($erreur2))
        {
            echo $erreur2;
        }
      ?>
    </div><br>
    <button name="action" value="LOGIN" type="submit" class="btn btn-primary">Se connecter</button>

</form>
<br>
<form action="./index.php" method="GET">
            <button type="submit" value="Inscription" name="action" class="btn btn-primary">S'inscrire</button>
    </form>

    <form action="./index.php" method="GET">
            <button type="submit" value="modifier_profil" name="action" class="btn btn-primary">Modifier Profil</button>
    </form>
</div>

 </body>
 </html>