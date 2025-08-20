<?php
 class Empresa{
    public function __construct( private string $nome = "", 
         private string $cnpj = "", 
         private string $setor = ""){
        }

         public function getNomeEmpresa(){
            return $this->nome;
        }
        public function getCNPJ(){
            return $this->email;
        }
        public function getSetor(){
            return $this->senha;
        }

        public function setNomeEmpresa($nome){
            $this->nome = $nome;
        }
        public function setCNPJ($email){
            $this->email = $email;
        }
        public function setSetor($senha){
            $this->senha = $senha;
        }
 }
?>