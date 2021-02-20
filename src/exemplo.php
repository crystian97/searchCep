<?php

require_once "../vendor/autoload.php";
use cryst\buscaCep\Search;
$cep = $_GET['CEP'];
$busca = new Search;
$resultado = $busca->getAddressFromZipCode($cep);
print_r($resultado);