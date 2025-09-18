<?php
    //pegando a classe usuario
    require_once "models/user.class.php";
    require_once "config.php";

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

        public function logout(){
            if(!isset($_SESSION)){
                session_start();
             }
             $_SESSION = array(); // = []
             session_destroy();
             header("location:index.php");
        }

        public function esqueci_senha(){
            $msg = '';
            $msg_email = "Será enviado um email para a recuperação de senha"; 
            if($_POST){
                if(empty($_POST['email'])){
                    $msg = 'Prencha o email';
                }
                else{
                    //verificar o email de algum usuário do sistema
                    $usuario = new Usuario(email:$_POST['email']);
                    $usuarioDao = new usuarioDao();
                    $retorno = $usuarioDao-> verificar_email($usuario);
                    if(is_array($retorno)){
                        if(count($retorno) > 0){
                            //enviar email
                            $assunto = "Recuperação de Senha - meu pet Sumiu";
                            $link = "index.php?controle=UsuarioController&metodo=trocar_senha&id=" . base64_encode($retorno[0]->id_usuario);
                            $nomeDestino = $retorno[0]-> nome;
                            $destino = $retorno[0]->email;
                            $remetente = "seu_email";
                            $nomeRemetente = "Meu pet Sumiu";
                            
                            $mensagem = "<h2>Senhor(a) Recebemos a solicitação da recuperação de senha.</h2>
                            <br><p>Caso não seja feito por vc, desconsidere</p>
                            <br><a href='". $link . "'clique aqui' </a> <br>";
                            $ret = sendMail($assunto, $mensagem, $remetente, $nomeRemetente, $destino, $nomeDestino);
                            if($ret){
                                $msg_email = "Foi enviado um email!";
                            } else{
                                $msg_email = "Problema no envio de email de recuperação, tente mais tarde!";
                            }

                        } else{
                            $msg = "Verifique o email informado";
                        }
                    } else{
                        $msg = 'Verifique o email informado!';
                    }
                }
                require_once'';
            }
        }
    }
?>