<?php
    // connexion à la base de données
    $base = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($base, "vizio");
?>