<?php 
// Include the database configuration file  
include('../utilitaire/db_connexion.php');
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $base->query("INSERT into document (image, created) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "Document enregistré."; 
            }else{ 
                $statusMsg = "Echec de l'enregistrement du document."; 
            }  
        }else{ 
            $statusMsg = 'Seulement les documents JPG, JPEG, PNG, & GIF sont acceptées.'; 
        } 
    }else{ 
        $statusMsg = 'Veuillez selectionner un document à enregistrer.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 

?>

<form action="./document_accueil.php" method="GET" class="mt-4">
    <button type="submit" value="ques_rep" name="action" class="btn btn-primary">Retour</button><br>
</form>