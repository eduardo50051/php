<?php
$diaSemana =date("w");

switch ($diaSemana) {

case 0:
echo "Domingo";
break;

case 1:
echo "Segunda";
break;

case 2:
echo "Terça";
break;
        
case 3:
echo "Quarta";
break;

case 4:
echo "Quinta";
break;

case 5:
echo "Sexta";
break;

case 6:
echo "Sabado";
break;

default:
echo "Invalido";
break;

// A estrutura do switch tem o case e o break, caso o break nao seja colocado ele 
//continua lendo, ja o default e para quando o valor do case nao existir, ele exibira
//um valor "padräo"





}








?>
