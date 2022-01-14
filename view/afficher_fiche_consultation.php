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

<?php
//sert à changer le format de la date
$date = $_SESSION['date_fiche_cons'];
$timestamp = strtotime($date);
$date = date("d-m-Y", $timestamp);
?>

<h1 class="mt-5" style="text-align:center;">Fiche consultation</h1>

<div class="mt-5 card container " style="width: 100rem;">
  <div class="card-body">

<table  style="font-size:25px; " class="mt-2 table table-bordered">
        <thead>
        <tr>
        <th class="hidden-sm hidden-md" valign=""><strong>Date</strong></th>
        <th><strong>Type</strong></th>
        <th class=""><strong>Description</strong></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
          <tr valign="middle">
            <td  class="hidden-sm hidden-md" align="left"><strong><?php echo$date?></strong> </td>
            <td  align="left"><?php echo$_SESSION['type_fiche_cons']?></td>
            <td  class="" align="left"><?php echo$_SESSION['description_fiche_cons']; ?></td>
          </tr>
        </tbody>
</table>

  </div>
</div>