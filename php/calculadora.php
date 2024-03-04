<?php
class Calculadora{
    private int $num1;
    private int $num2;

    public function __construct(int $num1, int $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function soma(){
        return $this->num1 + $this->num2;
    }    
    public function subtracao(){
        return $this->num1 - $this->num2;
    }
    public function multiplica(){
        return $this->num1 * $this->num2;
    }
    public function divisao(){
        return $this->num1/$this->num2;
    }
    public function getOperacao($operacao){
        if($operacao == "+"){
            return $this->soma();
        }
        if($operacao == "-"){
            return $this->subtracao();

        }
        if($operacao == "*"){
            return $this->multiplica();

        }
        if($operacao == "/"){
            return $this->divisao();

        }

    }
}

