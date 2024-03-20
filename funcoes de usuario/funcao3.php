<?php

function ola($texto = "mundo", $periodo="Bom dia"){

    return "ola $texto! $periodo !<br>";

}

echo ola();
echo ola("", "boa noite");
echo ola("eduardo","boa tarde");
echo ola("francisco", "");



?>