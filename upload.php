<?php

// definiu a pasta de destino
$pastaDestino = "/uploads/";
var_dump($_FILES);

var_dump($_FILES['arquivo']['size']);

if ($_FILES['arquivo']['size'] > 2000000)
{
    echo "O tamanho do arquivo é maior que o limite permitido.";
    die();      
}

var_dump($_FILES['arquivo']['name']);
var_dump(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));
$extensao = strolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));

if ($extensao != "png" && $extensao != "jpg" && $extensao != "jpeg" && $extensao != "gif" && $extensao != "jfif" && $extensao != "svg") {
    echo "O arquivo não é uma imagem! Apenas selecione arquivos com extenção png, jpg, jpeg, gif, jfif ou svg";
    die();
}



if (getimagesize($_FILES['arquivo']['tmp_name']) === false)
{
    echo "Problemas ao enviar a imagem. Tente novamente.";
    die();
}


var_dump( __DIR__ . $pastaDestino . $_FILES['arquivo']['name']);
$fezUpload = move_uploaded_file($_FILES['arquivo']['tmp_name'], __DIR__ . $pastaDestino . $nomeArquivo . "." . $extensao);

if($fezUpload == true)
{
    header("Location:index.php");
} else {
    echo "Erro ao mover arquivo.";
}



$nomeArquivo = uniqid();

$fezUpload = move_upload_file($_FILES['arquivo']['tmp_name'],
            __DIR__ . $pastaDestino . $nomeArquivo . "." . $extensao);
if ($fezUpload == true) {
    $conexao = mysqli_connect("localhost", "root", "", "upload-arquivos");
    $sql = "INSERT INTO arquivo (nome_arquivo) VALUES ('$nomeArquivo.$extensao')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado != false) {
        header("location: index.php");
    } else {
        echo "Erro ao registrar o arquivo no banco de dados.";
    }
} else {
    echo "Erro ao mover arquivo";
}





//var_dump(pathinfo($_FILES['arquivo']['name'], PTHINFO_FILENAME));
//var_dump(pathinfo($_FILES['arquivo']['name'], PTHINFO_BISENAME));
//var_dump(pathinfo($_FILES['arquivo']['name'], PTHINFO_DIRNAME));

?>