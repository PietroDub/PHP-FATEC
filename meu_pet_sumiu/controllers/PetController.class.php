<?php
    class produtoController{
        public function listar(){
        //buscar produtos no db
        //qual o banco, onde esta, nome, definir charset;
        $parametros = "mysql:host=localhost;dbname=exemplomvc;charset=utf8mb4";
        //parametro, usuario e senha
        $conn = new PDO($parametros, "root", "");
        //frase sql buscando dados
        $sql = "SELECT * FROM produtos";
        //prepara a frase, impedindo injeção de dados
        $stm = $conn->prepare($sql); 
        //executando
        $stm->execute();
        //fecchando conexão
        $conn = null;
        //PEGA TUDO do bd e traz como objeto o resultado
        $resultado = $stm->fetchAll(PDO::FETCH_OBJ);
        //mostrar o resultado
        // var_dump($resultado);
        //mostrar uma view com os produtos
        require_once ("Views/lista_produto.php");
        
        }

        public function inserir(){
            
        }

        public function alterar(){

        }

        public function excluir(){

        }
    }
?>