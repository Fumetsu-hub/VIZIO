<!DOCTYPE html>

<html lang="en" dir="ltr">

   <head>
      <title>test</title>
   </head>

   <body>

   <?php
      include('./utilitaire/bootstrap.php');
      include('./utilitaire/popup_profil.php');
   ?>


   <?php

   for($i=0;$i<10;$i++)
   {
      $nombre = rand(1, 20);
      $_SESSION["id"][$i] = $nombre;

      echo $_SESSION["id"][$i]."<br>";
   }


   ?>
   </body>
</html>


<?php
   function create_patients() // création de 25 patients pour les tests de "afficher liste patient"
   {
      include('./utilitaire/db_connexion.php');
      for($i=1;$i<=25;$i++)
      {  
         $lettre = chr(96+$i);
         $nombre = rand(1000000000, 1000001000);

         $nom = "Patient-".$lettre;
         $prenom = "Vizio".$lettre;
         $mail =  "patient.vizio@".$lettre;
         $date_n = "1999/01/01";
         $sex = "h";
         $tel = $nombre;

         $sql = 'INSERT INTO user VALUES("", "'.$nom.'", "'.$prenom.'", "", "'.$mail.'", "'.$date_n.'", "'.$sex.'", "'.$tel.'", "patient")';
         mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
      }
   }
   create_patients()
   ?>


