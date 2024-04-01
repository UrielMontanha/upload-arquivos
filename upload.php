<?php

// definiu a pasta de destino
$pastaDestino = "uploads/";

// pegamos o nome do aquivo
$nomeArquivo = $_FILES['fileToUpload']['name'];

var_dump($_FILES['fileToUpload']['name']);
var_dump($_SERVER);
file_exists($_SERVER[] . $pastaDestinpo . $nomeArquivo);