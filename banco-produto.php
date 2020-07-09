<?php

function listaProdutos($conexao){
    $produtos = array();
    $query = "select id,produtos.nome as prod, preco, descricao, categoria.nome as catnome from 
        produtos join categoria on produtos.id_categoria = categoria.id_categoria";
    $resultado = mysqli_query($conexao, $query);
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos,$produto);
    }
    return $produtos;
}

function insereProduto($conexao,$nome,$preco,$descricao,$categoria){
			$query = "insert into produtos (nome, preco,descricao,id_categoria) 
                values ('{$nome}', '{$preco}','{$descricao}','{$categoria}')";
			$resultadoDaInsercao = mysqli_query($conexao, $query);
			return $resultadoDaInsercao;
}


function removeProduto($conexao,$id){
    $query = "delete from produtos where id={$id}";
    return mysqli_query($conexao,$query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

?>

