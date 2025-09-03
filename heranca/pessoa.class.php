<?php
    Class Pessoa{
        public function __construct(
            protected string $nome = "",
            protected string $celular = "",
            protected string $endereco = ""
        ){}

        public function getNome(){
            return $this->nome;
        }

        public function getCelular(){
            return $this->celular;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setNome($nome){
            return $this->nome = $nome;
        }

        public function setCelular($celular){
            return $this->celular = $celular;
        }

        public function setEndereco($endereco){
            return $this->endereco = $endereco;
        }

        public function inserir($Pessoa){
            echo "inserir";
        }

        public function alterar($Pessoa){
            echo "alterar";
        }
    }
?>