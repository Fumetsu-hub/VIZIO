<html>
 <head>
    <meta charset='utf-8'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
 </head>
     <body>
     <br><br><h1 style="text-align:center">Connexion</h1><br><br>

<div class="container">
  
<br><br>
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
    <button name="action" value="Inscription" type="submit" class="btn btn-primary">S'inscrire</button>

</form>
</div>
     
 </body>
 </html>