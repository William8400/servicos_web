<?php

/* Estruturando uma API */

//Cabeçalho da API 
// header("Content-type: application/json; charset=UTF-8 ");
// header("Access-Control-Allow-Origin: *");

// Serviços do serviço web

// Leitura do arquivo JSON e armazenando e transformando em Array na variável Paçocas
$pacocas = json_decode( file_get_contents("pacoca.json"), true);

echo $pacocas['Paçoca']['Paçoca de amendoim']['nome'];


// Saída da API

// echo json_encode($alunos);