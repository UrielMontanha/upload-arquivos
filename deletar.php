<?php
$nome_arquivo = $_GET['nome_arquivo'];
$pastaDestino = "/uploads/";


$apagou = unlink(__DIR__ . $pastaDestino . $nome_arquivo);

if ($apagou == true) 
{
    $conexao = mysqli_connect("localhost", "root", "", "upload-arquivo");
    $sql = "DELETE FROM arquivo WHERE nome_arquivo='$nome_arquivo'";
    $resultado = mysqli_query($conexao, $sql);

    echo "<h2>Arquivo apagado</h2>";

    if ($resultado == false) 
    {
        echo "<h2>Erro ao apagar o arquivo do banco de dados.</h2>";
        die();
    }
} else 
{
    echo "<h2>Erro ao apagar o arquivo antigo.</h2>";
    die();
}

header("location: index.php");