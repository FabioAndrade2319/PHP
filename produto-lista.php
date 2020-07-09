<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-produto.php") ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { 
?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php 
    } 
?>

<h1>Lista de Produtos</h1>
<table class="table table-striped table-bordered">
    <tr>
        <th class="text-center">Produto</th>
        <th class="text-center">Categoria</th>
        <th class="text-center">Descrição</th>
        <th class="text-center">Preço</th>
        <th class="text-center"></th>
        <th></th>
    </tr>

    <?php

    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto){

    ?>  
    
    <tr>
        <td><?= $produto['prod']?></td>
        <td><?= $produto['catnome']?></td>
        <td><?= substr($produto['descricao'], 0, 40) ?></td>
        <td><?= $produto['preco']?></td>
        <td>
            <a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?= $produto['id']?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>   
    </tr>
    <?php
    }
    ?>
</table>




<?php include("rodape.php") ?>