<?php


$comn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$comn->beginTransaction();

$stmt = $comn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");


$id = 14;


$stmt->execute(array($id));

//$comn->rollback();
$comn->commit();






echo "dados deletados !";













?>