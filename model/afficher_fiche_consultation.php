<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

<?php

    $id_fiche = $_SESSION['id_fiche_afficher'];

    $sql = "SELECT * FROM consultation WHERE id = '$id_fiche'";
    $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
    $data = mysqli_fetch_array($result);

    $_SESSION['date_fiche_cons'] = $data['date'];
    $_SESSION['description_fiche_cons'] = $data['description'];
    $_SESSION['type_fiche_cons'] = $data['type'];
    $_SESSION['user_fiche_cons'] = $data['user2'];

 ?>