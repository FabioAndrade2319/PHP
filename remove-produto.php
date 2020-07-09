<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);

header("Location: produto-lista.php?removido = true"); //este header redireciona o navegador
die();

include("rodape.php");
?>