<?php

/* Estruturando uma API */

//Cabeçalho da API 
header("Content-type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Origin: *");

// Serviços do serviço web

$alunos = ['nome' => 'Ana', "curso" => "design"];

// Saída da API

echo json_encode($alunos);