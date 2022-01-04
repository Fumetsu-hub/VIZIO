<!DOCTYPE html>
<link rel="stylesheet" href="./css/liste_responsive.css">

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

    <form action="./index.php" method="GET">
            <button type="submit" value="recherche_multicritere" name ="action" class="btn btn-primary">Recherche multicritère</button>
    </form><br>

    <table  style="background-color:#FFF; font-size:20px; " class="table table-striped table-hover">
        <thead>
        <tr>
        <th class="hidden-sm hidden-md" valign=""><strong>No Patient</strong></th>
        <th><strong>Nom</strong></th>
        <th><strong>Prénom</strong></th>
        <th class="hidden-sm hidden-md"><strong>Email</strong></th>
        <th class="hidden-sm"><strong>Âge</strong></th>
        <th class="hidden-sm"><strong>Sexe</strong></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
            $count=1;
            $sel_query='SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut
            FROM user WHERE statut = "patient"';
            $result = mysqli_query($base,$sel_query);
            while($row = mysqli_fetch_assoc($result))  //rentre dans des tableaux sessions les données des patients
            {
                $_SESSION["id_patients"][$count] = $row["id"];
                $_SESSION["nom_patients"][$count] = $row["nom"];
                $_SESSION["prenom_patients"][$count] = $row["prenom"];
                $_SESSION["mail_patients"][$count] = $row["mail"];
                $_SESSION["date_n_patients"][$count] = $row["date_n"];
                $_SESSION["sexe_patients"][$count] = $row["sexe"];
                $count++;
            }

            if(!isset($_SESSION['patient_a_afficher']))$_SESSION['patient_a_afficher']=1; //initialise la variable qui va servire à afficher les 10 dossiers de la page

            if(isset($_SESSION['liste_dossier_patient']))$_SESSION['patient_a_afficher'] += $_SESSION['liste_dossier_patient']; // ajoute -10 ou 10 en fonction de page suivante ou page précédente
            $_SESSION['liste_dossier_patient']=0; // reset liste_dossier_patient une fois l'information récupérée

            if($_SESSION['patient_a_afficher']<1) // empêche d'afficher des dossiers inexistant
            {
                $_SESSION['patient_a_afficher'] += 10;
            }
            else if($_SESSION['patient_a_afficher']>=$count) // empêche d'afficher des dossiers inexistant
            {
                $_SESSION['patient_a_afficher'] -= 10;
            }
            
            for($z=$_SESSION['patient_a_afficher']; $z<=$_SESSION['patient_a_afficher']+9; $z++) // boucle qui affiche les 10 dossiers
            {
                if($z>=$count)break; // si ya plus de patients, on sort de la boucle.
                if(!isset($_SESSION["nom_patients"][$z]))break; // verification si il y'a 0 patients


                ?>
                <tr valign="middle">
                <td  class="hidden-sm hidden-md" align="left"><strong><?php echo$z; ?></strong> </td>
                <td  align="left"><?php echo$_SESSION["nom_patients"][$z]; ?></td>
                <td  align="left"><?php echo$_SESSION["prenom_patients"][$z]; ?>
                <td  class="hidden-sm hidden-md" align="left"><?php echo$_SESSION["mail_patients"][$z]; ?></td>
                <td class="hidden-sm" align="left">
                <?php 

                # Déterminer l'âge
                $from = new DateTime($_SESSION["date_n_patients"][$z]);
                $to   = new DateTime('today');
                $age = $from->diff($to)->y;
                echo $age;
                ?></td>

                <td class="hidden-sm" align="left"><?php echo$_SESSION["sexe_patients"][$z]; ?></td>
                <td align="left"> <!--Boutons-->
                    <form action="" method="POST">
                        <input value =<?php echo$_SESSION["id_patients"][$z]; ?> name="id_dossier_patient" type="hidden" id="id_dossier_patient"> <!-- sert à attribuer l'id du patient au bouton correspondant -->
                        <button class="btn btn-primary" type="submit" value="afficher_dossier_patient" name ="action">Dossier</button>
                    </form>
                </td> <!--Fin Boutons-->
                </tr>
        <?php
            }
        ?>

        </tbody>
    </table>

    <form action="./index.php" method="GET">
            <button type="submit" value="creer_dossier_patient" name ="action" class="btn btn-primary">Ajouter un patient</button>
    </form><br>
    <div class="row">
    <form class="col-sm-offset-4 col-sm-2" action="" method="POST">
        <input value = -10 name="liste_dossier_patient" type="hidden" id="liste_dossier_patient"> <!-- sert à attribuer l'id du patient au bouton correspondant -->
        <button class="btn btn-primary" type="submit" value="liste_dossier_patient" name ="action">Page précédente</button>
    </form>
    <form class="col-sm-offset-0 col-sm-2" action="" method="POST">
        <input value = 10 name="liste_dossier_patient" type="hidden" id="liste_dossier_patient"> <!-- sert à attribuer l'id du patient au bouton correspondant -->
        <button class="btn btn-primary" type="submit" value="liste_dossier_patient" name ="action">Page suivante</button>
    </form>
    </div>
</div>
</div>
