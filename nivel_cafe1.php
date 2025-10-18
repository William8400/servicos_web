<?php
$url = 'nivel_cafe1.json';

$resposta = file_get_contents($url);

$apicep = json_decode($resposta, true);

$cep = $apicep['cep'];

$estado = $apicep['estado'];

$cidade = $apicep['cidade'];

$vizinhanca = $apicep['vizinhanca'];

$rua = $apicep['rua'];

$servicos = $apicep['servicos'];


echo "<p><b>CEP:</b> $cep </p>";

echo "<p><b>Estado:</b> $estado </p>";

echo "<p><b>Cidade:</b> $cidade </p>";

echo "<p><b>Vizinhança:</b> $vizinhanca </p>";

echo "<p><b>Rua:</b> $rua </p>";

echo "<p><b>Serviços:</b> $servicos </p>";













?>