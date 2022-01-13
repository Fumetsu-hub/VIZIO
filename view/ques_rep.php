<html>
    <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Générateur de QCM</title>

        <script language="php">

            /**************************************************
            Ce fichier demande à l'utilisateur combien il veut poser de questions, de quel type : (boutons radio, menus déroulants, ou zone de texte). Il charge ces valeurs dans les variables numQuestions et quizType, qui sont initialisées dans le fichier du premier cadre (frame), ad.htm.
            **************************************************/ 

            // active et sélectionne le premier élément du premier formulaire (nombre de questions)
            function setFocus() {
            document.forms[0].elements[0].focus();
            document.forms[0].elements[0].select();
            }

            //charge le fichier approprié
            function react(form) {
            parent.intro.numQuestions = form.numQuestions.value;
            let qt = form.quizType.options[form.quizType.selectedIndex].value
            parent.intro.quizType = qt;
            if (qt != "text") { //s'il ne s'agit pas de réponses "texte"
                location.href='qcm1.htm';//on passe à qcm1.htm
            } else { //sinon...
                parent.cadre2.location.href='qcm2.htm';//on passe directement à qcm2.htm
            }
            parent.intro.numChoices=form.numChoices.value;
            parent.cadre2.location.href='qcm2.htm';
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
        <br>
        <form>Combien de questions dans le QCM ? 
            <input name="numQuestions" type="text" size="5" value="1"><br>
            Sélectionnez un type d'affichage : 
            <select name="quizType">
            <option value="radio">boutons radio
            </option><option value="select">menus déroulants
            </option><option value="checkbox">cases à cocher
            </option><option value="text">zone de texte
            </option></select>
        </form>
        <br>
        <!-- demande combien d'items et le stocke dans numChoices; charge qcm2.htm -->
<form>Combien d'items par question ? 
    5 choix max
<input name="numChoices" type="text" size="9" value="3">
&nbsp;&nbsp;
<button type="submit" value="questionnaire" name="action" class="btn btn-primary">Valider</button><br>
</form>

<!-- The Quiz creator was created by Charity Kahn, charity@cnet.com -->
        </div>
        <br><br><br><br>
        </div>
        </div>
    </body>
</html>