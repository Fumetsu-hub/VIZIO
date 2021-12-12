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

 ?>