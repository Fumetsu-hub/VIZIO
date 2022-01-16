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
include('./utilitaire/popup_recherche.php');

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

  if(!empty($_POST['sexe']))
  {
    $sexe = $_POST['sexe'];
    $_SESSION['recherche_sexe'] = $sexe;
  }

  if(!empty($_POST['email']))
  {
    $email = $_POST['email'];
    $_SESSION['recherche_email'] = $email;
  }

  if(!empty($_POST['date_n']))
  {
    $date_n = $_POST['date_n'];
    $_SESSION['recherche_date_n'] = $date_n;
  }

  // enregistre la derniere recherche faite pour pouvoir faire marche les "pages suivantes"
  if(isset($_SESSION['recherche_prenom'])){$prenom = $_SESSION['recherche_prenom'];}  
  if(isset($_SESSION['recherche_nom'])){$nom = $_SESSION['recherche_nom'];}
  if(isset($_SESSION['recherche_sexe'])){$sexe = $_SESSION['recherche_sexe'];}
  if(isset($_SESSION['recherche_email'])){$email = $_SESSION['recherche_email'];}
  if(isset($_SESSION['recherche_date_n'])){$date_n = $_SESSION['recherche_date_n'];}
?>

<div style="background-color: #f3f3f2;">
<br><br><h1 style="text-align:center;">Recherche patient</h1><br><br>
<div class="container">

    <div class="popup-btn btn btn-primary">
      <a>Rechercher</a>
    </div><br>

    <table  style="background-color:#FFF; font-size:20px; " class=" mt-2 table table-striped table-hover">
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

            if(isset($date_n) or isset($prenom) or isset($nom) or isset($sexe) or isset($email)) // si une recherche est effectuée :
            {
              // recherche par nom et prenom et sexe
              if(isset($prenom) and isset($nom) and isset($sexe) and !isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND sexe='$sexe' AND statut='patient'";}
              // recherche par nom et prenom
              else if(isset($prenom) and isset($nom) and !isset($sexe) and !isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND statut='patient'";}
              // recherche par prenom
              else if(isset($prenom) and !isset($nom) and !isset($sexe) and !isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND statut='patient'";}
              // recherche par nom
              else if(!isset($prenom) and isset($nom) and !isset($sexe) and !isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND statut='patient'";}
              
              // recherche par sexe
              else if(!isset($prenom) and !isset($nom) and isset($sexe) and !isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE sexe='$sexe' AND statut='patient'";}
              // recherche par sexe et prenom
              else if(isset($prenom) and !isset($nom) and isset($sexe) and !isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE sexe='$sexe' AND prenom LIKE '%$prenom%' AND statut='patient'";}
              // recherche par sexe et nom
              else if(!isset($prenom) and isset($nom) and isset($sexe) and !isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE sexe='$sexe' AND nom LIKE '%$nom%' AND statut='patient'";}
            
              // recherche par nom et prenom et sexe et email
              else if(isset($prenom) and isset($nom) and isset($sexe) and isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND sexe='$sexe' AND statut='patient' AND mail LIKE '%$email%'";}
              // recherche par nom et prenom et email
              else if(isset($prenom) and isset($nom) and !isset($sexe) and isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND statut='patient' AND mail LIKE '%$email%'";}
              // recherche par nom et sexe et email
              else if(!isset($prenom) and isset($nom) and isset($sexe) and isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND sexe='$sexe' AND statut='patient' AND mail LIKE '%$email%'";}
              // recherche par prenom et sexe et email
              else if(isset($prenom) and !isset($nom) and isset($sexe) and isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND sexe='$sexe' AND statut='patient' AND mail LIKE '%$email%'";}
              // recherche par email
              else if(!isset($prenom) and !isset($nom) and !isset($sexe) and isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE statut='patient' AND mail LIKE '%$email%'";}
              // recherche par sexe et email
              else if(!isset($prenom) and !isset($nom) and isset($sexe) and isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE sexe='$sexe' AND mail LIKE '%$email%' AND statut='patient'";}
              // recherche par email et nom
              else if(!isset($prenom) and isset($nom) and !isset($sexe) and isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND mail LIKE '%$email%' AND statut='patient'";}
              // recherche par email et prenom
              else if(isset($prenom) and !isset($nom) and !isset($sexe) and isset($email) and !isset($date_n)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND mail LIKE '%$email%' AND statut='patient'";}
              
              // ----------------------------------------------------------------date-----------------------------------------------------------------------

              // recherche par nom et prenom et sexe et email et date_n
              else if(isset($date_n) and isset($prenom) and isset($nom) and isset($sexe) and isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND sexe='$sexe' AND statut='patient' AND mail LIKE '%$email%' AND date_n = '$date_n'";}
              
              // recherche par nom et prenom et email et date_n
              else if(isset($date_n) and isset($prenom) and isset($nom) and !isset($sexe) and isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND date_n = '$date_n' AND prenom LIKE '%$prenom%' AND statut='patient' AND mail LIKE '%$email%'";}
              // recherche par nom et sexe et email et date_n
              else if(isset($date_n) and !isset($prenom) and isset($nom) and isset($sexe) and isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND date_n = '$date_n' AND sexe='$sexe' AND statut='patient' AND mail LIKE '%$email%'";}
              // recherche par prenom et sexe et email et date_n
              else if(isset($date_n) and isset($prenom) and !isset($nom) and isset($sexe) and isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND date_n = '$date_n' AND sexe='$sexe' AND statut='patient' AND mail LIKE '%$email%'";}
              // recherche par prenom et nom et sexe et date_n
              else if(isset($date_n) and isset($prenom) and isset($nom) and isset($sexe) and !isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND date_n = '$date_n' AND sexe='$sexe' AND statut='patient' AND nom LIKE '%$nom%'";}

              // recherche par nom et prenom et date_n
              else if(isset($date_n) and isset($prenom) and isset($nom) and !isset($sexe) and !isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND prenom LIKE '%$prenom%' AND statut='patient' AND date_n = '$date_n'";}
              // recherche par nom et email et date_n
              else if(isset($date_n) and !isset($prenom) and isset($nom) and !isset($sexe) and isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND mail LIKE '%$email%' AND statut='patient' AND date_n = '$date_n'";}
              // recherche par nom et sexe et date_n
              else if(isset($date_n) and !isset($prenom) and isset($nom) and isset($sexe) and !isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND sexe = '$sexe' AND statut='patient' AND date_n = '$date_n'";}
              // recherche par prenom et email et date_n
              else if(isset($date_n) and isset($prenom) and !isset($nom) and !isset($sexe) and isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND mail LIKE '%$email%' AND statut='patient' AND date_n = '$date_n'";}
              // recherche par prenom et sexe et date_n
              else if(isset($date_n) and isset($prenom) and !isset($nom) and isset($sexe) and !isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND sexe = '$sexe' AND statut='patient' AND date_n = '$date_n'";}
              // recherche par email et sexe et date_n
              else if(isset($date_n) and !isset($prenom) and !isset($nom) and isset($sexe) and isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE mail LIKE '%$email%' AND sexe = '$sexe' AND statut='patient' AND date_n = '$date_n'";}

              // recherche par date_n et prenom
              else if(isset($date_n) and isset($prenom) and !isset($nom) and !isset($sexe) and !isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE prenom LIKE '%$prenom%' AND date_n = '$date_n' AND statut='patient'";}
              // recherche par date_n et nom
              else if(isset($date_n) and !isset($prenom) and isset($nom) and !isset($sexe) and !isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE nom LIKE '%$nom%' AND date_n = '$date_n' AND statut='patient'";}
              // recherche par date_n et sexe
              else if(isset($date_n) and !isset($prenom) and !isset($nom) and isset($sexe) and !isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE sexe='$sexe' AND date_n = '$date_n' AND statut='patient'";}
              // recherche par date_n et email
              else if(isset($date_n) and !isset($prenom) and !isset($nom) and !isset($sexe) and isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE mail LIKE '%$email%' AND date_n = '$date_n' AND statut='patient'";}

              // recherche par date_n
              else if(isset($date_n) and !isset($prenom) and !isset($nom) and !isset($sexe) and !isset($email)){$sel_query="SELECT id, nom, prenom, mail, date_n, sexe, tel ,statut FROM user WHERE statut='patient' AND date_n = '$date_n'";}

              // ---------------------------------------------------------------------------------------------------------------------------------------




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

              if(isset($_SESSION['recherche_multicritere']))$_SESSION['patient_a_afficher'] += $_SESSION['recherche_multicritere']; // ajoute -10 ou 10 en fonction de page suivante ou page précédente
              //$_SESSION['recherche_multicritere']=0; // reset recherche_multicritere une fois l'information récupérée

              if($_SESSION['patient_a_afficher']<1) // empêche d'afficher des dossiers inexistant
              {
                  $_SESSION['patient_a_afficher'] += 10;
              }
              else if($_SESSION['patient_a_afficher']>=$count) // empêche d'afficher des dossiers inexistant
              {
                  $_SESSION['patient_a_afficher'] -= 10;
              }

              // ----- Cette partie sert à revenir à la page 1 lors d'une nouvelle recherche ------
              if(isset($_SESSION['recherche_multicritere']))
              {
                if($_SESSION['recherche_multicritere'] == 0)
                {
                  $_SESSION['patient_a_afficher'] = 1;
                }
              }
              $_SESSION['recherche_multicritere']=0; // reset recherche_multicritere
              // ---------- fin partie -----------
              
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
    </table>

    <div class="row mt-3">
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