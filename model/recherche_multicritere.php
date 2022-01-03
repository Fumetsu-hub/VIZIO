<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>


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
  if(isset($_POST['liste_dossier_patient']))
  {
    if(!empty($_POST['liste_dossier_patient']))
    {
      $_SESSION['liste_dossier_patient'] = $_POST['liste_dossier_patient'];
      $_POST['liste_dossier_patient'] = 0;
    }
  }
}
?>
<?php
/*
 if(isset($_POST['action']))
 {
    // vérifie si l'utilisateur n'a rempli aucun champs
    if(empty($_POST['nom']) and empty($_POST['prenom']) and empty($_POST['email']) and empty($_POST['date_n'])
    and empty($_POST['telephone']) and empty($_POST['sexe']))
    {
        $erreur2 = "Veuillez remplir au moins un champ !";
    }

    if (!empty($_POST['nom']))
    {
        $nom = $_POST["nom"];
    }
    if (!empty($_POST['prenom']))
    {
        $prenom = $_POST["prenom"];
    }
    if (!empty($_POST['email']))
    {
        $mail = $_POST["email"];
    }
    if (!empty($_POST['date_n']))
    {
        $date_n = $_POST["date_n"];
    }
    if (!empty($_POST['telephone']))
    {
        $tel = $_POST["telephone"];
    }
    if (!empty($_POST['sexe']))
    {
        $sex = $_POST["sexe"];
    }

    if(isset($_POST['nom']) or isset($_POST['prenom']) or isset($_POST['email']) or isset($_POST['date_n']) or isset($_POST['sexe']) or isset($_POST['telephone']))
    {
        if(!empty($_POST['nom']) or !empty($_POST['prenom']) or !empty($_POST['email']) or !empty($_POST['date_n']) or !empty($_POST['sexe']) or !empty($_POST['telephone']))
        {
            // Recuperation des infos :
            $sql = "SELECT * FROM user WHERE nom = '$nom' ORDER BY nom";
            $result = mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));

            //récupération avec mysql_fetch_array(), et affichage de nos résultats :
            echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
            echo( "<tr>
                    <td><div align=\"center\">Nom</div></td>
                    <td><div align=\"center\">Prénom</div></td>
                    <td><div align=\"center\">Email</div></td>
                    <td><div align=\"center\">Date de naissance</div></td>
                    <td><div align=\"center\">Sexe</div></td>
                    <td><div align=\"center\">Telephone</div></td>
            </tr>" );

            while($row = mysqli_fetch_array($result))  //rentre dans des tableaux sessions les données des patients
            {     
                echo( "<tr>\n" );
                echo( "<td><div align=\"center\">".$result["nom"]."</div></td>\n" );
                echo( "<td><div align=\"center\">".$result["prenom"]."</div></td>\n" );
                echo( "<td><div align=\"center\">".$result["mail"]."</div></td>\n" );
                echo( "<td><div align=\"center\">".$result["date_n"]."</div></td>\n" );
                echo( "<td><div align=\"center\">".$result["sex"]."</div></td>\n" );
                echo( "<td><div align=\"center\">".$result["tel"]."</div></td>\n" );
                echo( "</tr>\n" );
            }
          echo( "</table><br>\n" );    
        
        }
        
    }

  }
  */
?>