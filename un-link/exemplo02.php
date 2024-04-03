<?php

ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);


 if (!is_dir("imagens")) mkdir ("imagens");

    foreach (scandir("imagens") as $item) {
       if (!in_array ($item, array(".",".."))){

        unlink ("imagens/" . $item);

       }
    }

    echo "foi!";

?>