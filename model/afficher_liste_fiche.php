<!DOCTYPE html>

 <?php
if(isset($_POST['action']))
{
  if(isset($_POST['id_fiche']))
  {
    if(!empty($_POST['id_fiche']))
    {
      $_SESSION['id_fiche_afficher'] = $_POST['id_fiche'];
      header("Refresh:0; url=index.php?action=afficher_fiche_consultation"); // redirige vers "afficher dossier patient"
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
    unset($_SESSION['mot_cle']);
    unset($_SESSION['recherche_fiche']);
  }
}

 ?>