<!DOCTYPE html>

<?php
// connexion à la base de données
include('./utilitaire/db_connexion.php');
?>

<?php
 if(isset($_POST['action']))
 {
    if(empty($_POST['ques']))
    {

        $erreur2 = "Il n'y a pas de questions !";
    }

    $ques = htmlspecialchars($_POST['ques']);

    if(isset($_POST['ques']))
    {
        if(!empty($_POST['ques']))
        {
            //Cherche si la question existe déjà dans la bdd
            $sql = "SELECT quest FROM quest/rep WHERE quest = '$ques'";  
            $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
            $recup_quest = mysqli_fetch_array($result);
              
            //Vérification si la question est déjà utilisée
            if(!empty($recup_quest['mail'])){$erreur_ques = "La question existe deja";unset($ques);}
            else
            {
            //Si tout est bon alors :
            $sql = 'INSERT INTO quest/rep VALUES("", "'.$ques.')';
            mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
            $reussite = "La question est créée !";
            }

        }
    }


 }

 ?>

</html>