<?php

ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);


$name= "images";

if (!is_dir($name)) {

    mkdir($name);
    echo "Diretorio $name criado com susseco!";

}else {

    rmdir($name);
    echo "ja existe o diertorio : $name foi removido";
}






?>