<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>modifier profil</title>

</head>

<body>
<?php
include('./utilitaire/bootstrap.php');
include('./utilitaire/barre_de_navigation.php');
include('./utilitaire/popup_profil.php');
?>
<div class="tout">
<div class="container">
    <div>

    <br><h1>MON PROFIL</h1>

            <br><hr><br>
            <form action="" method="POST">
            <label><b>Nom</b></label><br>
            <input class="form-control w-25 p-1" type="text" value =  "<?php echo$_SESSION['nom'] ?>" name="newnom">
            <?php
             if (preg_match('/1|2|3|4|5|6|7|8|9/i', $_SESSION['nom'])){$erreur_nom = "Votre nom n'est pas valide";unset($nom);}else{
            if(isset($succes_modify_nom))
            {
                echo '<div class = "succes">' . $succes_modify_nom . '</div>';
            }}
            ?>
            
            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <form action="" method="POST">
            <label><b>Prénom</b></label><br>
            <input class="form-control w-25 p-1" type="text" value =  "<?php echo$_SESSION['prenom'] ?>" name="newprenom">
            <?php
            if (preg_match('/1|2|3|4|5|6|7|8|9/i', $_SESSION['prenom'])){$erreur_prenom = "Votre prénom n'est pas valide";unset($prenom);}else{

            if(isset($succes_modify_prenom))
            {
                echo '<div class = "succes">' . $succes_modify_prenom . '</div>';
            }}
            ?>
            
            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <form action="" method="POST">
            <label><b>Mail</b></label><br>
            <input class="form-control w-25 p-1" type="email" value = "<?php echo$_SESSION['mail'] ?>" name="newmail">
            <?php
            if(strpos($_SESSION['nom'], "@") == FALSE){$erreur_email = "Le mail n'est pas valide";unset($mail);}else{
            if(isset($succes_modify_email))
            {
                echo '<div class = "succes">' . $succes_modify_email . '</div>';
            }}
            ?>
           
            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <form action="" method="POST">
            <label><b>Mot de passe</b></label><br>
            <input class="form-control w-25 p-1" type="password"  value=  "<?php echo$_SESSION['mdp'] ?>" name="newmdp">
            <?php
            if(isset($succes_modify_password))
            {
                echo '<div class = "succes">' . $succes_modify_password . '</div>';
            }
            
            ?><br>
           <form action="" method="POST">
            <label><b>Confirmation de mot de passe</b></label><br>
            <input class="form-control w-25 p-1" type="password" placeholder = "confirmation de mot de passe" name="mdp2">
            <?php
            if(isset($succes_modify_password_2))
            {
                echo '<div class = "succes">' . $succes_modify_password_2 . '</div>';
            }
            ?>
           
            <input type="submit" id='modify_submit' value='Modifier' name ='action' class="btn btn-warning">
            </form><br>

            <hr><br>
        
        <div class="popup-btn btn btn-danger">
         <a>Supprimer profil</a>
        </div><br><br>
        <form action="./index.php" method="GET">
            <button type="submit" value="afficher_profil" name="action" class="btn btn-dark">Retour</button>
        </form><br>

    </div>
    <br><br><br><br>
</div>
</div>
</body>
