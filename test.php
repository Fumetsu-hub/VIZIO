<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sliding Modal Box Style</title>
      <link rel="stylesheet" href="css/popup.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   <body>
   <?php
    include('./utilitaire/bootstrap.php');
    include('./utilitaire/popup_profil.php');
  ?>


   <?php

      $variable = "fksdiofsjdifd";

      if (preg_match('/1|2|3|4|5|6|7|8|9/i', $variable))
      {
         echo "Contiens des nombres";
      }
      else
      {
         echo "Ne contients pas de nombres";
      }

   ?>
   </body>
</html>