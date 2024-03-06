<?php
class ContaBanco{
    public  $numConta;
    protected  $tipo;
    private  $dono;
    private  $saldo;
    private  $status;

    public function __construct($numConta, $tipo, $dono) {
        $this->setNumConta($numConta);
        $this->setTipo($tipo);
        $this->setDono($dono);
       
    }

    public function abrirConta() {
        $this->status = true;
        if($this->tipo == "CC" || $this->tipo == "cc") {
            $this->setSaldo(50);
        }else {
            $this->setSaldo(150);
        }
        $this->setStatus(false);   
       
    }
    public function fecahrConta() {
        if($this->saldo != 0){
            if($this->saldo < 0){
                echo "Você naõ pode fechar pois esta devendo";
            }else{
                echo "Você não pode fechar pois tem dinheiro na conta";
            }
        }
        else{
            $this->status = false;
        }
    }
    public function depositar($valor) {
        if($this->status == true){
            $this->saldo += $valor;
        }
    }
    public function sacar($valor){
        if($this->status == true){
            if($this->saldo > 0){
                echo "Você sacou $valor e tem em conta $this->saldo";
            }else{
                echo "Você não tem saldo para realizar saques!";
            }
        }
    }

    public function pagarMensal(){
        if($this->tipo == "CC" or $this->tipo == "cc"){
            $this->saldo -= 12;
        }else{
            $this->saldo -= 20;
        }
    }

    public function getNumConta()
    {
        return $this->numConta;
    }
    
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}

?>