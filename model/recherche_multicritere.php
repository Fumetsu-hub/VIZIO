<!DOCTYPE html>

 <?php
if(isset($_POST['action']))
{
  if(isset($_POST['id_dossier_patient']))
  {
    if(!empty($_POST['id_dossier_patient']))
    {
      $_SESSION['id_dossier_patient'] = $_POST['id_dossier_patient'];
      header("Refresh:0; url=index.php?action=afficher_dossier_patient"); // redirige vers "afficher dossier patient"
    }
  }
}

if(isset($_POST['action']))
{
  if(isset($_POST['recherche_multicritere']))
  {
    if(!empty($_POST['recherche_multicritere']))
    {
      $_SESSION['recherche_multicritere'] = $_POST['recherche_multicritere'];
      $_POST['recherche_multicritere'] = 0;
    }
  }
  else
  {
    unset($_SESSION['recherche_prenom']);
    unset($_SESSION['recherche_nom']);
    unset($_SESSION['recherche_sexe']);
  }
}

 ?>