<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload de Arquivo </title>
</head>
<body>

    <fieldset> <legend> <h2> Upload </h2> </legend>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione o arquivo:
        <input type="file" name="" id="fileToUpload"> 
        <input type="submit" value="Enviar" name="submit">
    </form>


    
    </fieldset>

</body>
</html>