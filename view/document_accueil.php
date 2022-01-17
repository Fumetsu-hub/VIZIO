<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
</head>
<body>

<form action="document_upload.php" method="post" enctype="multipart/form-data">
    <label>Selectionnez un document:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="enregistrer">
</form>
<br><br>
<form action="./document_view.php" method="GET" class="mt-4">
    <button type="submit" value="ques_rep" name="action" class="btn btn-primary">Voir documents</button><br>
</form>

</body>
</html>
