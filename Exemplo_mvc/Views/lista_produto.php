<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Produtos</h1>
<a href="index.php?controle=produtoController&metodo=inserir">Novo produto</a>
<table border="1">
    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Ações</th>
    </tr>   
<?php
foreach($resultado as $dados){
    $preco = number_format($dados->preco_produto,2,",",".");
    echo
    ("<tr>
        <td>$dados->nome_produto</td>
        <td>$preco</td>
        <td>$dados->qtde_produto</td>
        <td>
        <a href='index.php?controle=produtoController&metodo=alterar&id={dados->id_produto}'>Alterar</a>
        <a href='index.php?controle=produtoController&metodo=excluir&id={dados->id_produto}'>Excluir</a
        </td>
    </tr>");
}
?>
</table>
</body>
</html>