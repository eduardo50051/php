<?php

ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

require_once("config.php"); // Certifique-se de que config.php inclui a definição da classe Sql

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

?>
