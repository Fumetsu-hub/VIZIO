<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sliding Modal Box Style</title>
      <link rel="stylesheet" href="./css/popup.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   <body>
   <?php
   // bootstrap
   include('./utilitaire/bootstrap.php');
   ?>
      <div class="center modal-box">
         <div class="fas fa-times"></div>
         <p style="font-size:20px; font-weight: bold; color: black;">
            Voulez-vous vraiment supprimer ce document ?
         </p>
         <form action="./index.php" method="GET">
            <button type="submit" value="supprimer_document" name ="action" class="btn btn-danger">Supprimer document</button>
        </form>
      </div>
      <script>
         $(document).ready(function(){
           $('.popup-btn').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.popup-btn').toggleClass("show-modal");
           });
           $('.fa-times').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.popup-btn').toggleClass("show-modal");
           });
         });
      </script>
   </body>
</html>