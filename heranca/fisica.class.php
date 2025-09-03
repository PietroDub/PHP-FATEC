<?php
    class Fisica extends Pessoa{
        public function __construct(
             private string $cpf = "",
             string $nome="", string $celular = "", string $endereco = "") {
            parent::__construct($nome, $celular, $endereco);
        }

        public function getCpf(){
            return $this->cpf;
        }
        public function setCpg($cpf){
            return $this->cpf = $cpf;
        }
    }
?>