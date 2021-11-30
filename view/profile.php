<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Profil de : <?= $afficher['nom']. " " . $afficher['prenom']."";
    Vos donnée :  ?> </h2>
    <!--bouton pour suprimer le profile -->
    <form action='supprimer_profil.php' method='post'>
        <button type="submit" placeholder='supprimer user' name='delete'></button>
    </form>
<?php
include('m_profile.php');
?>
</body>
</html>