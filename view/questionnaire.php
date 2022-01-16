<html>
    <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php

    if($_SESSION['statut'] == "medecin")
    {
            include('./utilitaire/barre_de_navigation_medecin.php');
    }
    else
    {
            include('./utilitaire/barre_de_navigation_patient.php');
    }

    ?>
    
    <title>questionnaire</title>
        <script language="php">

            isset ( numQues = 0);
            isset ( numChoi = 0);

            isset (answers = new Array(numQues));


            function getScore(form) {
            isset (score = 0);
            isset (currElt);
            isset (currSelection);
            isset (bon = false);

            for (i=0; i<numQues; i++) {
                currElt = i*numChoi;
                bon=false;
                for (j=0; j<numChoi; j++) {
                currSelection = form.elements[currElt + j];
                if ((currSelection.checked)&&(answers[i].indexOf(currSelection.value) != -1)) {
                    bon=true;}
                if ((currSelection.checked)&&(answers[i].indexOf(currSelection.value) == -1)) {
                    bon=false;
                    break;
                    }
                if (!(currSelection.checked)&&(answers[i].indexOf(currSelection.value) != -1)) {
                    bon=false;
                    break;
                    }
                }
                if (bon==true) {score++}
            }


            var correctAnswers = "";
            for (i=1; i<=numQues; i++) {
                correctAnswers += i + ". " + answers[i-1] + "\r\n";
            }
            form.solutions.value = correctAnswers;

            }

        </script>
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
        <?php
        for ($i = 0, $j = 0; $i < $numQues, $j < $numChoi; $i++, $j++) 
        {     
        ?>                                                                                                                                                                                                                                                                                                    
        <form name="quiz">
        <b>1. </b><br>
        <input type="checkbox" name="q1" value=""><br>
        <p>
        <?php
        }
        ?>


        <textarea name="solutions" wrap="virtual" rows="4" cols="40"></textarea>
        </form>
        </div>
        <br><br><br><br>
        </div>
        </div>
    </body>
</html>