<?php
include('./utilitaire/db_connexion.php');
include('./utilitaire/popup_document.php');

$id_user = $_SESSION["id_user"]; // récupère l'id de l'utilisateur

$requete = "DELETE FROM `document` WHERE doc = $id_user";
mysqli_query($base, $requete) or die('Erreur : '.$requete.'<br />'.mysqli_error($base));

include('./controlleur/voir_docu.php'); //renvoi vers la liste document

?>
<div class="popup-btn btn btn-danger">
         <a>Supprimer document</a>
        </div><br><br>
        <form action="./index.php" method="GET">
            <button type="submit" value="Document" name="action" class="btn btn-dark">Retour</button>
        </form><br>