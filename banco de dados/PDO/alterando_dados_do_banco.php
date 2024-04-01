<?php

$comn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $comn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "usuario10";
$password = "q1w2e3r4t5";
$id = 10;

$stmt->bindParam(":LOGIN" , $login);
$stmt->bindParam(":PASSWORD" , $password);
$stmt->bindParam(":ID" , $id);

$stmt->execute();


echo "dados alterados !";







?>



