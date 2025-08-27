<?php
    class Usuarios{
        public function __construct(private int $id_usuario = 0, private string $nome = "", private string $email = "",
         private string $senha = "", private string $celular = ""){}
         public function getId_usuario(){
            return $this->id_usuario;
        }  
        public function get_nome(){
            return $this->nome;
        }      
        public function get_email(){
            return $this->email;
        }  
        public function get_senha(){
            return $this->senha;
        }  
        public function get_celular(){
            return $this->celular;
        } 
        
        //setters

        public function set_id_usuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }

        public function set_nome($nome){
            $this->nome = $nome;
        }

        public function set_email($email){
            $this->email = $email;
        }

        public function set_senha($senha){
            $this->$senha = $senha;
        }

        public function set_celular($celular){
            $this->$celular = $celular;
        }
    }
?>