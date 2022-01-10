<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

<?php
    $id_patient = $_SESSION["id_dossier_patient"];
    $sql = "SELECT * FROM user WHERE id = '$id_patient'";
    $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
    $data = mysqli_fetch_array($result);
    $info_patient['nom'] = $data['nom'];
    $info_patient['prenom'] = $data['prenom'];
    $info_patient['mail'] = $data['mail'];
    $info_patient['mdp'] = $data['mdp'];
    $info_patient['tel'] = $data['tel'];
    $info_patient['statut'] = $data['statut'];
    $info_patient['sexe'] = $data['sexe'];
    $info_patient['date_n'] = $data['date_n'];

    $_SESSION['nom_pat'] = $info_patient['nom'];
    $_SESSION['prenom_pat'] = $info_patient['prenom'];
    $_SESSION['mail_pat'] = $info_patient['mail'];
    $_SESSION['mdp_pat'] = $info_patient['mdp'];


    # Déterminer l'âge
    $from = new DateTime($data["date_n"]);
    $to   = new DateTime('today');
    $info_patient['age'] = $from->diff($to)->y;
 ?>
