<?php

/* CONSUMO DE API - Utilização de um serviço web */

// Requisição GET através de uma URL (protocolo HTTP)

$url = "http://localhost/servicos-web/api.php?tipo=pacoca=coco";

// guardar um valor de resposta da API 
$resposta = file_get_contents($url);

echo $resposta;

//Conversão JSON para um Array associativo 
// $valores = json_decode($resposta, true);
