<!DOCTYPE html>

    <?php
        // connexion à la base de données
        include('./utilitaire/db_connexion.php');
    ?>

    <?php
        if(isset($_POST['action']))
        {
            
            $ques = htmlspecialchars($_POST['ques']);
            $rep1 = htmlspecialchars($_POST['rep1']);
            $rep2 = htmlspecialchars($_POST['rep2']);
            $rep3 = htmlspecialchars($_POST['rep3']);
            $rep4 = htmlspecialchars($_POST['rep4']);
            $rep5 = htmlspecialchars($_POST['rep5']);

            if(isset($_POST['ques']))
            {
                if(!empty($_POST['ques']))
                {
                    //Cherche la question dans la bdd
                    $sql = "SELECT quest FROM quest/rep WHERE quest = '$ques'";  
                    $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
                    $recup_quest = mysqli_fetch_array($result);

                    //Si tout est bon alors :
                    $sql = 'INSERT INTO questions VALUES("", "'.$ques.')';
                    mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));

                    $sql = 'INSERT INTO questions VALUES("", "'.$rep1.')';
                    mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));

                    $sql = 'INSERT INTO questions VALUES("", "'.$rep2.')';
                    mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));

                    $sql = 'INSERT INTO questions VALUES("", "'.$rep3.')';
                    mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));

                    $sql = 'INSERT INTO questions VALUES("", "'.$rep4.')';
                    mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));

                    $sql = 'INSERT INTO questions VALUES("", "'.$rep5.')';
                    mysqli_query($base, $sql) or die('Erreur : '.$sql.'<br />'.mysqli_error($base));
                }
            }

        }

    ?>
</html>