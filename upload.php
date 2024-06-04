<?php

// definiu a pasta de destino
$pastaDestino = "/uploads/";
var_dump($_FILES);

var_dump($_FILES['fileToUpload']['size']);

if ($_FILES['fileToUpload']['size'] > 2000000)
{
    echo "O tamanho do arquivo é maior que o limite permitido.";
    die();
}

//var_dump($_FILES['fileToUpload']['name']);
var_dump(pathinfo($_FILES['fileToUpload']['name'], PTHINFO_EXTENSION));

$extensao = pathinfo($_FILES['fileToUpload']['name'], PTHINFO_EXTENSION);

if ($extensao != "png" AND $extensao != "jpg" && $extensao != "jpeg" && $extensao != "gif" && $extensao != "jfif" && $extensao != "svg") {
    echo "O arquivo não é uma imagem! Apenas selecione arquivos com extenção png, jpg, jpeg, gif, jfif ou svg";
    die();
}



if (getimagezise($_FILES['fileToUpload']['tmp_name']) === false) 
{
    echo "Problemas ao enviar a imagem. Tente novamente.";
    die();
}

//$FilesUpload 



//var_dump(pathinfo($_FILES['fileToUpload']['name'], PTHINFO_FILENAME));
//var_dump(pathinfo($_FILES['fileToUpload']['name'], PTHINFO_BISENAME));
//var_dump(pathinfo($_FILES['fileToUpload']['name'], PTHINFO_DIRNAME));

?>