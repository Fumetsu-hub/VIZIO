<?php
//le medecin peut piocher sur n'importe quel profil
session_start();
include('db_connexion.php');
if (!isset($_SESSION['id'])){
    header('Location: index.php'); 
    exit;
}

//recup de l'id

$id = (int)$_GET['id'];
//a partir de l'id choisi on recupere les info 
$afficher = $DB->query("SELECT * FROM user WHERE id= ?", 
array($id));
$afficher = $afficher->fetch();//-> une seul var()

//verification ****
if (!isset($afficher['id'])){
    header('Location: index.php'); 
    exit;
}
// A TESTER 
?>