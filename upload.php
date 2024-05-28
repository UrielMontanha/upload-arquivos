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

var_dump($_FILES['fileToUpload']['name']);
var_dump(pathinfo($_FILES['fileToUpload']['name'], PTHINFO_EXTENSION));
var_dump(pathinfo($_FILES['fileToUpload']['name'], PTHINFO_FILENAME));
var_dump(pathinfo($_FILES['fileToUpload']['name'], PTHINFO_BISENAME));
var_dump(pathinfo($_FILES['fileToUpload']['name'], PTHINFO_DIRNAME));

?>