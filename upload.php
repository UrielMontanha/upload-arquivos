<?php

// definiu a pasta de destino
$pastaDestino = "/uploads/";

// pegamos o nome do aquivo
$nomeArquivo = $_FILES['fileToUpload']['name'];

var_dump($_FILES['fileToUpload']['name']);

// verificar se o arquivo já existe
file_exists(__DIR__ . $pastaDestinpo . $nomeArquivo);

var_dump(__DIR__ . $pastaDestinpo . $nomeArquivo);

