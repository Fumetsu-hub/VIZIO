<?php
  session_start();
  include('db_connexion.php');
 
  if (!isset($_SESSION['id'])){
    //header('Location: index.php');
    exit;
  }
  
  // On récupère tous les utilisateurs sauf l'utilisateur en cours
  $afficher_profil = $base->query("SELECT * 
    FROM user 
    WHERE id <> ?",
    array($_SESSION['id']));
  $afficher_profil = $afficher_profil->fetchAll(); // fetchAll() permet de récupérer toute  enregistrements
?>