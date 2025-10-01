<?php
    class Pets {
        public function __construct(
            private int $id_pet = 0,
            private string $nome = "",
            private string $idade = "",
            private string $raca = "",
            private string $porte = "",
            private string $local = "",
            private string $data = "",
            private string $imagem = "",
            private string $cor_Olhos = "",
            private string $cor = "",
            private string $observacoes = "",
            private string $situacao = "",
            private Usuarios $usuario = new Usuarios()){}
            
            // Getter para nome
            public function getNome(): string {
                return $this->nome;
            }

            // Setter para nome
            public function setNome(string $nome): void {
                $this->nome = $nome;
            }
        }
?>