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
  <form enctype="multipart/form-data" action="Document" method="post">
        <label>Uploader le document image:</label><br /> 
        <input name="userImage" type="file" /> 
        <input type="submit" value="ajouter" />
</form>
</html>
