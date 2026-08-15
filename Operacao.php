<?php


class Operacao {
    
    private $valor1;
    private $valor2;

    
    public function setValor1($valor) {
        $this->valor1 = $valor;
    }

    public function getValor1() {
        return $this->valor1;
    }

    public function setValor2($valor) {
        $this->valor2 = $valor;
    }

    public function getValor2() {
        return $this->valor2;
    }

    
    public function somar() {
        return $this->valor1 + $this->valor2;
    }

    public function subtrair() {
        return $this->valor1 - $this->valor2;
    }

    
    public function multiplicar() {
        return $this->valor1 * $this->valor2;
    }

    
    public function dividir() {
        if ($this->valor2 == 0) {
            return "Erro: Divisão por zero!";
        }
        return $this->valor1 / $this->valor2;
    }

    
    public function exponenciar() {
        return $this->valor1 ** $this->valor2;
    }
}
?>
