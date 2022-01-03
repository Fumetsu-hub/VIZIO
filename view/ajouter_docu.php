<!DOCTYPE html>
<html lang="en">
<head>
    <title>Afficher document patient</title>
</head>
<body>

<?php
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
include('./utilitaire/barre_de_navigation.php');
?>
<div class="responsive_card card border-0 shadow rounded-3 my-5 container">
  <div class="card-body">

  <html>
<form action="inserer_image" method="post" enctype="multipart/form­data">
Image
<br />
<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
<input type="file" name="image" size="12"/>
<input type="submit" value="Ajouter"/>
</form>
</html>
