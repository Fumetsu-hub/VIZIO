<!DOCTYPE html>

<?php
// connexion à la base de données
include('../db_connexion.php');
?>


<br><br><h1 style="text-align:center;">Liste Patients</h1><br><br>
<div class="container">
    <table  style="background-color:#FFF; font-size:20px; " class="table table-striped table-hover">
        <thead>
        <tr>
        <th valign=""><strong>Id Patient</strong></th>
        <th><strong>Nom</strong></th>
        <th><strong>Prénom</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Âge</strong></th>
        <th><strong>Sexe</strong></th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count=1;
        $sel_query="SELECT id, nom, prenom, mail, age, sexe, tel ,statut
        FROM user";
        $result = mysqli_query($base,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
        <tr valign="middle">
            <td  align="left"><strong><?php echo $row['id']; ?></strong> </td>
            <td  align="left"><?php echo $row["nom"]; ?></td>
            <td  align="left"><?php echo $row["prenom"]; ?>
            <td  align="left"><?php echo $row["mail"]; ?></td>
            <td  align="left"><?php echo $row["age"]; ?></td>
            <td  align="left"><?php echo $row["sexe"]; ?></td>
        </tr>

        <?php
        $count++; } ?>
        </tbody>
    </table>
</div>
