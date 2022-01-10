<!DOCTYPE html>
<link rel="stylesheet" href="./css/liste_responsive.css">

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
// bootstrap
include('./utilitaire/bootstrap.php');
//navbar
include('./utilitaire/barre_de_navigation.php');
//popup recherche
include('./utilitaire/popup_recherche_fiche.php');

?>

<?php

  // stock les recherches dans les variables $nom, $prenom etc.
  if(!empty($_POST['nom']))
  {
    $nom = $_POST['nom'];
    $_SESSION['recherche_nom'] = $nom;
  }

  if(!empty($_POST['prenom']))
  {
    $prenom = $_POST['prenom'];
    $_SESSION['recherche_prenom'] = $prenom;
  }

  if(!empty($_POST['date_fiche']))
  {
    $date_fiche = $_POST['date_fiche'];
    $_SESSION['recherche_fiche'] = $date_fiche;
  }

  // enregistre la derniere recherche faite pour pouvoir faire marche les "pages suivantes"
  if(isset($_SESSION['recherche_prenom'])){$prenom = $_SESSION['recherche_prenom'];}  
  if(isset($_SESSION['recherche_nom'])){$nom = $_SESSION['recherche_nom'];}
  if(isset($_SESSION['recherche_fiche'])){$date_fiche = $_SESSION['recherche_fiche'];}
  
?>

<div style="background-color: #f3f3f2;">
<br><br><h1 style="text-align:center;">Recherche fiche consultation</h1><br><br>
<div class="container">

    <div class="popup-btn btn btn-primary">
      <a>Rechercher</a>
    </div><br><hr>

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

            if(isset($prenom) or isset($nom) or isset($date_fiche)) // si une recherche est effectuée :
            {
              /*
              // recherche par nom et prenom et date_fiche
              if(isset($prenom) and isset($nom) and isset($date_fiche)){$sel_query="SELECT date, description, type, user2, FROM consultation WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND date='$date_fiche' AND statut='patient'";}
              // recherche par nom et prenom
              else if(isset($prenom) and isset($nom) and !isset($sexe)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND statut='patient'";}
              // recherche par prenom
              else if(isset($prenom) and !isset($nom) and !isset($sexe)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND statut='patient'";}
              // recherche par nom
              else if(!isset($prenom) and isset($nom) and !isset($sexe)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND statut='patient'";}
              // recherche par sexe
              else if(!isset($prenom) and !isset($nom) and isset($sexe)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE sexe='$sexe' AND statut='patient'";}
              // recherche par sexe et prenom
              else if(isset($prenom) and !isset($nom) and isset($sexe)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE sexe='$sexe' AND prenom LIKE '%$prenom%' AND statut='patient'";}
              // recherche par sexe et nom
              else if(!isset($prenom) and isset($nom) and isset($sexe)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE sexe='$sexe' AND nom LIKE '%$nom%' AND statut='patient'";}
              */
              $nom = "Martin";
              $prenom = "Marc";
              $date_fiche = "2022-01-05";
              $sel_query="SELECT date, description, type, user2, FROM consultation WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND date='$date_fiche' AND statut='patient'";

              $result = mysqli_query($base,$sel_query);
              while($row = mysqli_fetch_assoc($result))  //rentre dans des tableaux sessions les données des patients
              {
                  $_SESSION["date_fiche"][$count] = $row["date"];
                  $_SESSION["description_fiche"][$count] = $row["description"];
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
          } // celui la sert a fermer le "if (isset nom prenom)"
        ?>

        </tbody>
    </table><hr>

    <div class="row">
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