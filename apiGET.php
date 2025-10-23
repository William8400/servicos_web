<?php


// cabeçalho que contém metadados (configurações) sobre API 

header("Content-type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Origin: *");

$metodo = $_SERVER['REQUEST_METHOD'];

// Sistema API (códigos php)

switch ($metodo) {

    case "GET":
        metodoGET();
        break;

    case "POST":

        break;

    default:
        echo "Metódo não identificado";
        break;
}

function metodoGET()
{

    $pacocas = json_decode(file_get_contents("pacoca.json"), true);

    $pacoca_especifica = $_GET['pacoca'];

    switch ($pacoca_especifica) {

        case "coco":
            $pacoca_coco = $pacocas['paçocas']['Paçoca de coco'];
            echo json_encode($pacoca_coco);
            break;

        default:
            echo json_encode($pacocas);
            break;
    }
}
