<?php

$comn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $comn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($results as $row ){

    foreach ($row as $key => $value) {
        echo "<strong>" . $key . ":</strong>" . $value.  "<br/>";
    }

    echo"==========================<br/>";

}





?>