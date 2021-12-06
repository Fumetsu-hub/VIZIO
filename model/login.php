
<?php
  session_start();
  include('../db_connexion.php');
  if(isset($_POST['mail']) && isset($_POST['mdp']))
  {
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    
    $requete = "SELECT mdp,mail FROM user where 
      mail = '".$mail."' mdp = '".$mdp."' ";
    $exec_requete = mysqli_query($base,$requete); //or die('Erreur !<br />'.mysqli_error($base));
    //$reponse = mysqli_fetch_array($exec_requete);
    $count = $reponse['count(*)'];
    if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $mail;
           header('Location: /vizio/controlleur/login.php');
        }
        else
        {
           header('Location: /vizio/view/login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
  }
  else
{
   header('Location: /vizio/view/login.php');
}
mysqli_close($db); // fermer la connexion
?>