<?php


// cabeçalho que contém metadados (configurações) sobre API 

header("Content-type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Origin: *");

$metodo = $_SERVER['REQUEST_METHOD'];

// Sistema API (códigos php)

switch($metodo){

    case "GET":
        metodoGET();
        break;

    case "POST":

        break;

    default:
        echo "Metódo não identificado";
        break;

}

function metodoGET(){




}