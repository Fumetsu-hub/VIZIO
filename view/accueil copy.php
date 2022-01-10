<?php
$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ? AND prix <= ?');

$req->execute(array($utilisateur, $prix));
?>