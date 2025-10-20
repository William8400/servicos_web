<?php

/* Estruturando uma API */

//Cabeçalho da API 
header("Content-type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Origin: *");

// Serviços do serviço web

// Leitura do arquivo JSON e armazenando e transformando em Array na variável Paçocas
$pacocas = json_decode(file_get_contents("pacoca.json"), true);
// echo $pacocas['paçocas']['Paçoca de amendoim']['nome'];

// Saída da API
// Variável para guardar o que tem na posição enviada pelo link
$pacoca_especifica = $_GET['pacoca'];

$tipo = $_GET['tipo'];


switch($pacoca_especifica){
    
    case "coco":
        $pacoca_coco = $pacocas['paçocas']['Paçoca de coco'];
        echo json_encode($pacocas);
        break;

    default:
        echo json_encode($pacocas);
        break;
}



function cadrastar_pacoca($nome, $tipo, $origem, $nutrientes){


    $pacocas['paçocas'][$nome]['nome'] = $nome;

    $pacocas['paçocas'][$nome]['tipo'] = $tipo;

    $pacocas['paçocas'][$nome]['origem'] = $origem;

    $pacocas['paçocas'][$nome]['nutrientes'] = $nutrientes;
    
    if (false) {
        salvar_dados($pacocas);
    }
}
function salvar_dados($variavel){

    // Salvar dados no arquivo 
    file_put_contents('pacoca.json', json_encode($variavel, JSON_PRETTY_PRINT));
}


// echo $pacocas['paçocas']['Paçoca de coco']['nome'];

// echo $pacocas['paçocas']['Paçoca de Mel']['nome'];