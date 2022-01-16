<!DOCTYPE html>

<?php
 // connexion à la base de données
 $base = mysqli_connect('localhost', 'root', '');
 mysqli_select_db($base, "vizio");
?>
<?php

if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 10000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                $id_patient= $_SESSION["id_dossier_patient"];
                $id_medecin= $_SESSION["id_user"];
                $req = $base->query('INSERT INTO document VALUES("'.$id_medecin.'","'.$id_patient.'","document","'.$_FILES['monfichier']['name'].'")');
                //if (in_array($extension_upload, $extensions_autorisees))
                //{
                        // On peut valider le fichier et le stocker définitivement
                      // $toto= move_uploaded_file($_FILES['monfichier']['tmp_name'], 'site/');
                       //if ($toto)
                       //{
                         //$docu = 'site/';
                         //echo($docu)
                        //echo "L'envoi a bien été effectué !";
                        //$req = $base->query('INSERT INTO document VALUES("","","test","'.$docu.'"');
                      // }
                       //else
                       //{
                        //echo "L'envoi a raté";
                       //}
                        
                         
 
                }
        //}
 }     
//$req = $base->query('INSERT INTO document (doc_bin) VALUES('$doc_bin')');
 
 
 
 //if(isset($_POST["submit"])){
     
   //  echo(var_dump($_FILES,$_POST));
    //$b = getimagesize($_FILES["monfichier"]["tmp_name"]);
    //Vérifiez si l'utilisateur à sélectionné une image
    //if($b !== 0){
      //  echo("tata");
        //Récupérer le contenu de l'image
        //$file = $_FILES['monfichier']['tmp_name'];
        //$image = addslashes(file_get_contents($file));


        //$query = $db->query("INSERT into document (doc_bin) VALUES ('$image')");
        //if($query){
          //  echo "Fichier uploadé avec succès.";
        //}else{
         //   echo "Échec d'upload du fichier.";
        //} 
    //}else{
      //  echo "Veuillez sélectionner une image à uploader.";
    //}
//}
header("Refresh:0; url=../index.php?action=Document");
?>
