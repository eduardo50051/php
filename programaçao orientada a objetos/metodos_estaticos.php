<?php

class Documento{

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $resultado = $this->validarCPF($numero);

        if ($resultado === false){
            echo "CPF informado não é válido. ";
            return; // Encerra a execução do método após o echo
        }

        $this->numero = $numero;
    }

    private function validarCPF($cpf){
        $cpf = preg_replace('/[^0-9]/', '', $cpf); // Remover todos os caracteres não numéricos

        // Verificar se o CPF tem 11 dígitos
        if (strlen($cpf) != 11) {
            echo "CPF inválido: deve conter 11 dígitos. ";
            return false;
        }

        // Verificar CPFs inválidos com todos os dígitos iguais
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            echo "CPF inválido: todos os dígitos são iguais. ";
            return false;
        }

        // Verificar se o CPF é válido usando o algoritmo de validação
        for ($i = 0, $sum = 0; $i < 9; $i++) {
            $sum += ($cpf[$i] * (10 - $i));
        }

        $remainder = $sum % 11;

        if ($remainder == 0 || $remainder == 1) {
            $digit = 0;
        } else {
            $digit = 11 - $remainder;
        }

        if ($cpf[9] != $digit) {
            echo "CPF inválido: dígito verificador incorreto. ";
            return false;
        }

        for ($i = 0, $sum = 0; $i < 10; $i++) {
            $sum += ($cpf[$i] * (11 - $i));
        }

        $remainder = $sum % 11;

        if ($remainder == 0 || $remainder == 1) {
            $digit = 0;
        } else {
            $digit = 11 - $remainder;
        }

        if ($cpf[10] != $digit) {
            echo "CPF inválido: dígito verificador incorreto. ";
            return false;
        }

        return true;
    }
}

$cpf = new Documento();
$cpf->setNumero("11111111111");

var_dump($cpf->getNumero());

?>
