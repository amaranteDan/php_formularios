<?php

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$descricao = filter_input(INPUT_POST, 'descricao');

var_dump('--FORM-DATA--',$nome, $email, $descricao);

//Para pegar as informações enviadas pelo postman via json
$json = file_get_contents("php://input");
$json = json_decode($json, true);//Decodificando as informações e usando array

var_dump('--JSON--',$json);

if (is_null($nome)){
    $nome = $json['nome'] ?? null;
}
if (is_null($email)){
    $nome = $json['email'] ?? null;
}
if (is_null($nome)){
    $nome = $json['descricao'] ?? null;
}

var_dump('--FINAL--', $nome, $email, $descricao);