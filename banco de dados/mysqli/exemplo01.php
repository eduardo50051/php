<?php

$comn = new mysqli("localhost", "root", "", "dbphp");

if ($comn-> connect_error) {

        echo "error:" . $comn->connect_error;
        exit;
}


$stmt = $comn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");


$stmt->bind_param("ss", $login, $pass);

$login = "user";

$pass= "12345";

$stmt->execute();

$login = "root";

$pass= "!@#$";

$stmt->execute();

$login = "teste";

$pass= "335355880";

$stmt->execute();




?>