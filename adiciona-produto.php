<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-produto.php") ?>

	<?php
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$descricao = $_POST['descricao'];
		$categoria = $_POST['categoria_id'];		

		if (insereProduto($conexao,$nome,$preco,$descricao,$categoria)){ 
	?>

		<p class="text-success"> Produto <?= $nome; ?> , <?= $preco; ?> adicionado com sucesso !</p>

	<?php 
		} else{ 
			$msg = mysqli_error($conexao);
			echo 'Cade a mensagem de erro ??!!'
			
	?>
		<p class="text-danger"> Produto <?= $nome ?> ,  não foi adicionado! <?= $msg ?></p>
		
	<?php
		}

	?>

<?php include("rodape.php") ?>

