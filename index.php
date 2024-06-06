<?php
$conexao = mysqli_connect("localhost", "root", "", "upload-arquivo");
$sql = "SELECT * FROM arquivo";
$resultado = mysqli_query($conexao, $sql);
if ($resultado != false) {
    $arquivos = mysqli_fetch_all($resultado, MYSQLI_BOTH);
} else {
    echo "Erro ao executar comando SQL.";
    die();
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload de Arquivo </title>
</head>
<body>

    <fieldset> <legend> <h2> Upload </h2> </legend>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione o arquivo:
        <input type="file" name="arquivo"> 
        <input type="submit" value="Enviar" name="submit">
    </form>

    <br><br>
    <table>
        <thead>
            <tr>
                <th>Nome arquivo</th>
                <th cosplan="2"> Opções</th>
            <tr>
        </thead>
        <tbody>
            <?php
            foreach ($arquivos as $arquivo) {
                echo "<tr><td>" . $arquivo['nome_arquivo'] . "</td>";
                echo "<td><a href=''>Alterar</td>";
                echo "<td><button>Excluir</button></td></tr>";
            }
            ?>
        </tbody>
        </table>

    </fieldset>

</body>
</html>