<?php

$comn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $comn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE (:LOGIN, :PASSWORD)");

$login = "Eduardo";
$password = "7777777";

$stmt->bindParam(":LOGIN" , $login);
$stmt->bindParam(":PASSWORD" , $password);

$stmt->execute();


echo "inserido ok !";







?>