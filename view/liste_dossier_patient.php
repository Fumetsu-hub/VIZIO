<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
include('./utilitaire/barre_de_navigation.php');
?>

<br><br><h1 style="text-align:center;">Liste Patients</h1><br><br>
<div class="container">
    <table  style="background-color:#FFF; font-size:20px; " class="table table-striped table-hover">
        <thead>
        <tr>
        <th valign=""><strong>No Patient</strong></th>
        <th><strong>Nom</strong></th>
        <th><strong>Prénom</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Âge</strong></th>
        <th><strong>Sexe</strong></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count=1;
        $sel_query='SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut
        FROM user WHERE statut = "pat"';
        $result = mysqli_query($base,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
        <tr valign="middle">
            <td  align="left"><strong><?php echo $count; ?></strong> </td>
            <td  align="left"><?php echo $row["nom"]; ?></td>
            <td  align="left"><?php echo $row["prenom"]; ?>
            <td  align="left"><?php echo $row["mail"]; ?></td>
            
            <td  align="left">
            <?php 
            # Déterminer l'âge
            $from = new DateTime($row["date_n"]);
            $to   = new DateTime('today');
            $age = $from->diff($to)->y;
            echo $age;
            ?></td>

            <td  align="left"><?php echo $row["sexe"]; ?></td>
            <td  align="left"> <!--Boutons-->
                <form action="" method="POST">
                    <input value =<?php echo $row["id"]; ?> name="id_dossier_patient" type="hidden" id="id_dossier_patient"> <!-- sert à attribuer l'id du patient au bouton correspondant -->
                    <button class="btn btn-primary" type="submit" value="afficher_dossier_patient" name ="action">Dossier</button>
                </form>
            </td> <!--Fin Boutons-->

        </tr>

        <?php
        $count++; } ?>
        </tbody>
    </table>

    <form action="./index.php" method="GET">
            <button type="submit" value="creer_dossier_patient" name ="action" class="btn btn-primary">Ajouter un patient</button>
        </form>
</div>
