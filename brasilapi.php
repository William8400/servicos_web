<?php

// Requisição através de uma URL (protocolo HTTP)
$url = "https://brasilapi.com.br/api/cep/v1/89010025";

// guardar um valor de resposta da API
$resposta = file_get_contents($url);

//Conversão JSON para um Array associativo 
$dados = json_decode($resposta, true);

$cep = $dados['cep'];

$state = $dados['state'];

$city = $dados['city'];

$neighborhood = $dados['neighborhood'];

$street = $dados['street'];

$service = $dados['service'];

echo "<h3> CEP: $cep </h3>";
echo "<h3> Estado: $state </h3>";
echo "<h3> Cidade: $city </h3>";
echo "<h3> Vizinhança: $neighborhood </h3>";
echo "<h3> Rua: $street </h3>";
echo "<h3> Serviço: $service </h3>";





