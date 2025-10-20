<?php

/* CONSUMO DE API - Utilização de um serviço web */

// Requisição através de uma URL (protocolo HTTP)

$url = "http://localhost/servicos-web/api.php";

// guardar um valor de resposta da API 
$resposta = file_get_contents($url);

//Conversão JSON para um Array associativo 
$valores = json_decode($resposta, true);
