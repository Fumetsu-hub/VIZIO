<!DOCTYPE html>

<?php
 // connexion à la base de données
 $base = mysqli_connect('localhost', 'root', '');
 mysqli_select_db($base, "vizio");
?>

<?php
 echo("toto");
 if(isset($_POST["submit"])){
     
     echo(var_dump($_FILES,$_POST));
    $b = getimagesize($_FILES["userImage"]["tmp_name"]);
    //fopen à add
    //Vérifiez si l'utilisateur à sélectionné une image
    echo($b);
    if($b !== 0){
        echo("tata");
        //Récupérer le contenu de l'image
        $file = $_FILES['userImage']['tmp_name'];
        $image = addslashes(file_get_contents($file));

echo ($image);
        $query = $db->query("INSERT into document (doc_bin) VALUES ('$image')");
        if($query){
            echo "Fichier uploadé avec succès.";
        }else{
            echo "Échec d'upload du fichier.";
        } 
    }else{
        echo "Veuillez sélectionner une image à uploader.";
    }
}
?>
