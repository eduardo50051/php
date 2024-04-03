<?php
ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

$cep = "02227000";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Correção aqui
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data["logradouro"]);
?>
