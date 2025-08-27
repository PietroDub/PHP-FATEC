<?php
    //pegando a classe usuario
    require_once "models/user.class.php";
    class userController{
        public function login(){
            //requerimento do formulário:
            require_once("views/form_usuario.php");

            //rebendo dados
            if($_POST){
                //verificando dados (no db se existe usuário)
                
            }
        }
        public function inserir(){
            //rebendo dados
            $msg = array("","","","");
            $erro = false;
            if($_POST){
                //verificando dados (se foi preenchido)
                if(empty($_POST["nome"])){
                    $msg[0] = "Preencha seu Nome!";
                    $erro = true;
                }

                if(empty($_POST["email"])){
                    $msg[1] = "Preencha seu Email!";
                    $erro = true;
                } else{
                    //verificar se já existe
                      $usuario = new Usuarios(email:$_POST["email"]);
                }

                if(empty($_POST["senha"])){
                    $msg[2] = "Preencha sua senha!";
                    $erro = true;
                }

                if(empty($_POST["numero"])){
                    $msg[3] = "Preencha seu numero!";
                    $erro = true;
                }
                
                if(!$erro){
                    $usuario = new Usuarios(0,$_POST ["nome"], $_POST ["email"], $_POST ["senha"], $_POST ["celular"]);
                    //se não der erro, cadastrar 

                }
            }
            require_once"views/form_usuario.php";

        }
    }
?>