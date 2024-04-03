<?php

function trataNome($nome){

    if (!$nome){

        throw new Exception("nehum nome informado", 1);
        

    }

    echo ucfrist($nome)."<br>";

}

try{

    trataNome("eduardo");
    tretaNome("");

} catch (Exception $e) {

    echo $e->getMessage();

} finally{

    echo "executou o try!";

}






?>