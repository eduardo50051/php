<?php

class Pessoa {
   
    public $nome;//Atributo

    public function falar(){//Método

        return "O meu nome é" .$this->nome;

    }
    

}

$eduardo = new Pessoa();
$eduardo->nome = " Eduardo Gomes";
echo $eduardo->falar();




























?>