<!DOCTYPE html>
<link rel="stylesheet" href="./css/liste_responsive.css">

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
if($_SESSION['statut'] == "medecin")
{
        include('./utilitaire/barre_de_navigation_medecin.php');
}
else
{
        include('./utilitaire/barre_de_navigation_patient.php');
}//popup recherche
include('./utilitaire/popup_recherche_fiche.php');
?>

<?php

  // stock les recherches dans les variables $nom, $prenom etc.
  if(!empty($_POST['mot_cle']))
  {
    $mot_cle = $_POST['mot_cle'];
    $_SESSION['mot_cle'] = $mot_cle;
  }

  if(!empty($_POST['date_fiche']))
  {
    $date_fiche = $_POST['date_fiche'];
    $_SESSION['recherche_fiche'] = $date_fiche;
  }

  // enregistre la derniere recherche faite pour pouvoir faire marche les "pages suivantes"
  if(isset($_SESSION['mot_cle'])){$mot_cle = $_SESSION['mot_cle'];}
  if(isset($_SESSION['recherche_fiche'])){$date_fiche = $_SESSION['recherche_fiche'];}
  
?>

<div style="background-color: #f3f3f2;">
<br><br><h1 style="text-align:center;">Fiches consultation de <br><?php echo$_SESSION['nom_pat']." ".$_SESSION['prenom_pat']?></h1><br><br>
<div class="container">

<!--
    <div class="popup-btn btn btn-primary">
      <a>Rechercher</a>
    </div><br>
-->

    <table  style="background-color:#FFF; font-size:20px; " class="mt-2 table table-striped table-hover">
        <thead>
        <tr>
        <th class="hidden-sm hidden-md" valign=""><strong>Numero Fiche</strong></th>
        <th><strong>Date</strong></th>
        <th class="hidden-sm hidden-md"><strong>Type</strong></th>
        <th class="hidden-sm hidden-md"><strong>Action</strong></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
            $count=1;
            $id_dossier_patient = $_SESSION["id_dossier_patient"];

            if (!empty($_POST['mot_cle']) or !empty($_POST['date_fiche']))
            {
              if(!empty($_POST['mot_cle']) and empty($_POST['date_fiche'])) // mot clé
              {
                $sel_query="SELECT user2, date, type FROM consultation WHERE user2='$id_dossier_patient' AND description LIKE '%$mot_cle%' OR type LIKE '%$mot_cle%'";
              }
              else if(empty($_POST['mot_cle']) and !empty($_POST['date_fiche'])) // date fiche
              {
                $sel_query="SELECT user2, date, type FROM consultation WHERE user2='$id_dossier_patient' AND date LIKE '%$date_fiche%'";
              }
              else if(!empty($_POST['mot_cle']) and !empty($_POST['date_fiche'])) // mot clé et date fiche
              {
                  $sel_query="SELECT user2, date, type FROM consultation WHERE user2='$id_dossier_patient' AND date LIKE '%$date_fiche%' AND description LIKE '%$mot_cle%' OR type LIKE '%$mot_cle%'";
              }
            }
            else
            {
              $sel_query="SELECT id, user2, date, type FROM consultation WHERE user2='$id_dossier_patient'";
            }

              $result = mysqli_query($base,$sel_query);
              while($row = mysqli_fetch_assoc($result))  //rentre dans des tableaux sessions les données des patients
              {
                  $_SESSION["id_fiche"][$count] = $row["id"];
                  $_SESSION["date_fiche"][$count] = $row["date"];
                  $_SESSION["type_fiche"][$count] = $row["type"];
                  $_SESSION["user_fiche"][$count] = $row["user2"];
                  $count++;
              }

              if(!isset($_SESSION['patient_a_afficher']))$_SESSION['patient_a_afficher']=1; //initialise la variable qui va servire à afficher les 10 dossiers de la page

              if(isset($_SESSION['recherche_multicritere']))$_SESSION['patient_a_afficher'] += $_SESSION['recherche_multicritere']; // ajoute -10 ou 10 en fonction de page suivante ou page précédente
              $_SESSION['recherche_multicritere']=0; // reset recherche_multicritere une fois l'information récupérée

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
                  <td  align="left">
                    <?php 
                    //Affiche la date   (le php sert à changer le format de la date)

                    $date = $_SESSION["date_fiche"][$z];
                    // Création du timestamp à partir du date donnée
                    $timestamp = strtotime($date);
                    // Créer le nouveau format à partir du timestamp
                    $date = date("d-m-Y", $timestamp);
                    echo$date;
                    ?>
                  </td>
                  <td  class="hidden-sm hidden-md" align="left"><?php echo$_SESSION["type_fiche"][$z]; ?></td>
                  <td align="left"> <!--Boutons-->
                      <form action="" method="POST">
                          <input value =<?php echo$_SESSION["id_fiche"][$z]; ?> name="id_fiche" type="hidden" id="id_fiche"> <!-- sert à attribuer l'id du patient au bouton correspondant -->
                          <button class="btn btn-dark" type="submit" value="afficher_fiche_consultation" name ="action">Voir fiche</button>
                      </form>
                  </td> <!--Fin Boutons-->
                  </tr>
        <?php
            }
        ?>

        </tbody>
    </table>

    <form action="./index.php" method="GET">
      <button type="submit" value="creation_fiche_consultation" name="action" class="btn btn-primary">Créer fiche</button>
    </form>
    <div class="mt-4 row">
    <form class="col-sm-offset-4 col-sm-2" action="" method="POST">
        <input value = -10 name="recherche_multicritere" type="hidden" id="recherche_multicritere">
        <button class="btn btn-primary" type="submit" value="recherche_multicritere" name ="action">Page précédente</button>
    </form>
    <form class="col-sm-offset-0 col-sm-2" action="" method="POST">
        <input value = 10 name="recherche_multicritere" type="hidden" id="recherche_multicritere">
        <button class="btn btn-primary" type="submit" value="recherche_multicritere" name ="action">Page suivante</button>
    </form>
    </div>
</div>
</div>
</div>