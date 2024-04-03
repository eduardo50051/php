<?php

ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");

echo " deu esquema !";



?>