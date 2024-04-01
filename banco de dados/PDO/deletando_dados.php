<?php

$comn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $comn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


$id = 9;

$stmt->bindParam(":ID" , $id);

$stmt->execute();


echo "dados deletados !";



?>


