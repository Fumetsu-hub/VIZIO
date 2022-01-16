<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>modifier dossier patient</title>

</head>

<body>
<?php
include('./utilitaire/bootstrap.php');
if($_SESSION['statut'] == "medecin")
{
        include('./utilitaire/barre_de_navigation_medecin.php');
}
else
{
        include('./utilitaire/barre_de_navigation_patient.php');
}include('./utilitaire/popup_dossier_patient.php');
?>

<div class="tout">
<div class="container">
    <div>

    <br><h1>DOSSIER PATIENT</h1>

            <br><hr><br>
            <form action="" method="POST">
            <label><b>Nom</b></label><br>
            <input class="form-control w-25 p-1" type="text" value = "<?php echo$_SESSION['nom_pat'] ?>" name="newnom">
            <?php
             if (preg_match('/1|2|3|4|5|6|7|8|9/i', $_SESSION['nom'])){$erreur_nom = "Votre nom n'est pas valide";unset($nom);}else{
            if(isset($succes_modify_nom))
            {
                echo '<div class = "succes">' . $succes_modify_nom . '</div>';
            }
            if(isset($erreur_nom_modif))
            {
                echo '<div class = "succes">' . $erreur_nom_modif . '</div>';
            }
        }
            ?>
            
            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <form action="" method="POST">
            <label><b>Prénom</b></label><br>
            <input class="form-control w-25 p-1" type="text" value = "<?php echo$_SESSION['prenom_pat'] ?>" name="newprenom">
            <?php
            if (preg_match('/1|2|3|4|5|6|7|8|9/i', $_SESSION['prenom'])){$erreur_prenom = "Votre prénom n'est pas valide";unset($prenom);}else{

            if(isset($succes_modify_prenom))
            {
                echo '<div class = "succes">' . $succes_modify_prenom . '</div>';
            }
            if(isset($erreur_prenom_modif))
            {
                echo '<div class = "succes">' . $erreur_prenom_modif . '</div>';
            }
        }
            ?>
            
            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <form action="" method="POST">
            <label><b>Mail</b></label><br>
            <input class="form-control w-25 p-1" type="email" value = "<?php echo$_SESSION['mail_pat'] ?>" name="newmail">
            <?php
            if(isset($succes_modify_email))
            {
                echo '<div class = "succes">' . $succes_modify_email . '</div>';
            }
            if(isset($erreur_email_modif))
            {
                echo '<div class = "succes">' . $erreur_email_modif . '</div>';
            }
            ?>
           
            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <form action="" method="POST">
            <label><b>Téléphone</b></label><br>
            <input class="form-control w-25 p-1" type="tel" pattern="[0-9]{10}" value = "<?php echo$_SESSION['tel_pat'] ?>" name="newtel">
            <?php
            if(isset($succes_tel_modif))
            {
                echo '<div class = "succes">' . $succes_tel_modif . '</div>';
            }
            ?>

            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <form action="" method="POST">
            <label><b>Mot de passe</b></label><br>
            <input class="form-control w-25 p-1" type="password" value="" name="newmdp">

           <form action="" method="POST">
            <label class="mt-3"><b>Confirmation mot de passe</b></label><br>
            <input class="form-control w-25 p-1" type="password" name="newmdp_confirm">
            <?php
            if(isset($succes_modify_password))
            {
                echo '<div class = "succes">' . $succes_modify_password . '</div>';
            }
            if(isset($erreur_mdp_modif))
            {
                echo '<div class = "succes">' . $erreur_mdp_modif . '</div>';
            }
            ?>

            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <hr><br>
        
        <div class="popup-btn btn btn-danger">
         <a>Supprimer patient</a>
        </div><br><br>
        <form action="./index.php" method="GET">
            <button type="submit" value="afficher_dossier_patient" name="action" class="btn btn-dark">Retour</button>
        </form><br>

    </div>
    <br><br><br><br>
</div>
</body>
