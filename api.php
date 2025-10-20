<?php

/* Estruturando uma API */

//Cabeçalho da API 
// header("Content-type: application/json; charset=UTF-8 ");
// header("Access-Control-Allow-Origin: *");

// Serviços do serviço web

// Leitura do arquivo JSON e armazenando e transformando em Array na variável Paçocas
$pacocas = json_decode( file_get_contents("pacoca.json"), true);
// echo $pacocas['paçocas']['Paçoca de amendoim']['nome'];

$pacocas['paçocas']['Paçoca de Mel']['nome'] = "Paçoca de Mel";

$pacocas['paçocas']['Paçoca de Mel']['tipo'] = "Doce";

$pacocas['paçocas']['Paçoca de Mel']['origem'] = "Brasil";

$pacocas['paçocas']['Paçoca de Mel']['nutrientes'] = "Nenhum";


$pacocas['paçocas']['Paçoca de coco']['nome'] = "Paçoca de coco";

$pacocas['paçocas']['Paçoca de coco']['tipo'] = "Doce";

$pacocas['paçocas']['Paçoca de coco']['origem'] = "Belgica";

$pacocas['paçocas']['Paçoca de coco']['nutrientes'] = "Cocoativo";

// Salvar dados no arquivo 

file_get_contents('pacoca.json', json_encode($pacocas, JSON_PRETTY_PRINT));



// echo $pacocas['paçocas']['Paçoca de coco']['nome'];

// echo $pacocas['paçocas']['Paçoca de Mel']['nome'];



// Saída da API

// echo json_encode($alunos);