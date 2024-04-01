<?php

$pastaDestino = "uploads/";
$nomeArquivo = $_FILES['fileToUpload']['name'];
var_dump($_FILES['fileToUpload']['name']);

file_exists($_SERVER[] . $pastaDestinpo . $nomeArquivo);