<?php

$comn = new mysqli("localhost", "root", "", "dbphp");

if ($comn->connect_error) {
    echo "Error: " . $comn->connect_error;
    exit;
}

$result = $comn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

if ($result) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        array_push($data, $row);
        
    }
} 

echo json_encode($data);



?>
