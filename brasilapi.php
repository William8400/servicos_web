<?php

// Requisição através de uma URL (protocolo HTTP)
$url = "https://brasilapi.com.br/api/cep/v1/89010025";

// guardar um valor de resposta da API
$resposta = file_get_contents($url);

//Conversão JSON para um Array associativo 
$dados = json_decode($resposta, true);

$cep = $dados['cep'];

$estado = $dados['state'];

$cidade = $dados['city'];

$vizinhanca = $dados['neighborhood'];

$rua = $dados['street'];

$servico = $dados['service'];

echo "<h3> CEP: $cep </h3>";
echo "<h3> Estado: $estado </h3>";
echo "<h3> Cidade: $cidade </h3>";
echo "<h3> Vizinhança: $vizinhanca </h3>";
echo "<h3> Rua: $rua </h3>";
echo "<h3> Serviço: $servico </h3>";





