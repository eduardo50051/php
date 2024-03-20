
<?php


//estruturas de controle de fluxo (comandos de desicsao)- if/else 

$suaIdade =7;

$idadeCrianca =12;
$idadeAdulto =18; 
$idadeIdoso =70;




if ($suaIdade < $idadeCrianca) {

 echo "Criança";

 } 
 
else if ($suaIdade < $idadeAdulto) {
    
    echo "Adolecente";

} else if ($suaIdade < $idadeIdoso){

    echo "adulto";

 } else {
 
    echo "Idoso" ;

}

//tambem ha como fazer isso com o echo

echo ($suaIdade < $idadeAdulto)?"Menor de Idade":"Maior de Idade";


// a interrogacao serve como "entäo" e os : como se fosse "se näo"


?>
