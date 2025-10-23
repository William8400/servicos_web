<?php

$url = "atividade.json";

$resposta = file_get_contents($url);

$info = json_decode($resposta, true);

$nome = $info["nome"];

$idade = $info["idade"];

$profissao = $info["profissao"];

$cidade = $info["cidade"];

echo "<p> <b>Nome:</b> $nome </p>";

echo "<p> <b>Idade:</b> $idade </p>";

echo "<p> <b>Profissão:</b> $profissao </p>";

echo "<p> <b>Cidade:</b> $cidade </p>";
?>