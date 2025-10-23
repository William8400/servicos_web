<?php

// Do lado do cliente (Consumindo a API)

// De uma url com endpoint para requisitar algum serviço da API 

$url = "https://localhost/servicos-web/apiGET.php";

$resposta = file_get_contents($url);

$dados = json_decode($resposta, true);

