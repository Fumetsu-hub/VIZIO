<link href="./css/no_button.css" rel="stylesheet">
<?php include('./utilitaire/bootstrap.php'); ?>


<!-- BARRE DE NAVIGATION -->
<nav style="background-color:#e3f3fc; font-size:23px" class="container-fluid navbar navbar-expand-lg navbar-light">
  <img src="./utilitaire/logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
  <form action="./index.php" method="GET">
    <button value="accueil" name="action" type="submit" style="margin-left:20px; font-size:28px" class=" no_button navbar-brand mb-0 h1">Accueil</button>
  </form>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li style="margin-left:10px;" class="nav-item">
      <form action="./index.php" method="GET">
        <button style="margin-top:2px;" class="no_button nav-link" type="submit" value="liste_dossier_patient" name="action">Dossiers patient</button>
      </form>
      </li>
      <li style="margin-left:20px;" class="nav-item">
      <form action="./index.php" method="GET">
        <button style="margin-top:2px;" class="no_button nav-link" type="submit" value="afficher_profil" name="action">Mon profil</button>
      </form>  
      </li>
      <li style="margin-left:20px;" class="nav-item">
      <form action="" method="GET">
        <button style="margin-top:2px;" class="no_button nav-link" type="submit" value="" name="action">Vide</button>
      </form>      
      </li>
      <li style="margin-left:20px;" class="nav-item">
      <form action="" method="GET">
        <button style="margin-top:2px;" class="no_button nav-link" type="submit" value="" name="action">Vide</button>
      </form>      
      </li>
    </ul>
  </div>
</nav>
<!-- FIN BARRE DE NAVIGATION -->