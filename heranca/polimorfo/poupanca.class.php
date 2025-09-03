<?php
    class Poupanca extends Conta{
        public function __construct(private int $aniversario = 0, string $numero = "",
        string $agencia = "", float $saldo = 0)
        {
            parent::__construct($numero, $agencia, $saldo);
        }

        public function Retirar($valor){
            $diaCorrente = (int)date("d");
            
            if($this->aniversario > $diaCorrente){
                echo "Você perderá o rendimento";
            }
            if($this->saldo >= $valor){
                parent::Retirar($valor);  
            } else{
                echo "Sem dinheiro!";
            }
        }
    }
?>