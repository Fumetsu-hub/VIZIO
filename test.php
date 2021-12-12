<!doctype html>
<html lang="en">
  <head>
    <title>test</title>
  </head>
  <body>
  <?php
  
include('./utilitaire/bootstrap.php');

  ?>

<?php

# Déterminer l'âge
$from = new DateTime('1980-02-10');
$to   = new DateTime('today');
$age = $from->diff($to)->y;
echo "age = ".$age;

?>

  </body>
</html>