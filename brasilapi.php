<?php

$url = "https://brasilapi.com.br/api/cep/v1/89010025";

$resposta = file_get_contents($url);

$dados = json_decode($resposta, true);

$cep = $dados['cep'];

$state = $dados['state'];

$city = $dados['city'];

$neighborhood = $dados['neighborhood'];

$street = $dados['street'];

$service = $dados['service'];

echo "<h3> CEP: $cep </h3>";
echo "<h3> Estado: $state </h3>";
echo "<h3> Cidade: $city</h3>";
echo "<h3> Vizinhança: $neighborhood </h3>";
echo "<h3> Rua: $street </h3>";
echo "<h3> Serviço: $service </h3>";





