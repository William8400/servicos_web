<?php

/* Estruturando uma API */

//Cabeçalho da API 
// header("Content-type: application/json; charset=UTF-8 ");
// header("Access-Control-Allow-Origin: *");

// Serviços do serviço web

// Leitura do arquivo JSON e armazenando e transformando em Array na variável Paçocas
$pacocas = json_decode( file_get_contents("pacoca.json"), true);
// echo $pacocas['paçocas']['Paçoca de amendoim']['nome'];

if(false){
    
    $pacocas['paçocas']['Paçoca de Mel']['nome'] = "Paçoca de Mel";

    $pacocas['paçocas']['Paçoca de Mel']['tipo'] = "Doce";

    $pacocas['paçocas']['Paçoca de Mel']['origem'] = "Brasil";

    $pacocas['paçocas']['Paçoca de Mel']['nutrientes'] = "Nenhum";

}

function salvardados($variavel){
    
    // Salvar dados no arquivo 
    file_put_contents('pacoca.json', json_encode($variavel, JSON_PRETTY_PRINT));

}





// echo $pacocas['paçocas']['Paçoca de coco']['nome'];

// echo $pacocas['paçocas']['Paçoca de Mel']['nome'];



// Saída da API

// echo json_encode($alunos);