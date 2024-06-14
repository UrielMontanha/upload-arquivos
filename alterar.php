<?php
$nome_arquivo = $_GET['nome_arquivo'];

?>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alterar arquivo </title>
</head>

<body>

    <fieldset>
        <legend>
            <h2> Upload </h2>
        </legend>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Alterando o arquivo <?= $nome_arquivo ?>: <br>
            <input type="hidden" name="nome_arquivo" value="<?= $nome_arquivo ?>">
            <input type="file" name="arquivo">
            <input type="submit" value="Enviar" name="submit">
        </form>

    </fieldset>

</body>

</html>