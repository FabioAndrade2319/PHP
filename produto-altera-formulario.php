<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$categorias = listaCategorias($conexao);
$id = $_GET['id'];
$produto = buscaProduto($conexao,$id);
?>


<html>
    <h1>Alterando Produto</h1>
    <form action="altera-produto.php" method="POST">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" class="form-control" 
                    value="<?=$produto['nome']?>" /></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input type="number" name="preco" class="form-control"
                 value="<?=$produto['preco']?>" /></td>
            </tr>

             <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control"/><?= $produto['descricao']?>
                </textarea></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <?php foreach($categorias as $categoria) : ?>
                    <input type="radio" name="categoria_id" value="<?=$categoria[id_categoria]?>"/>
                    <?=$categoria[nome]?>
                    </br>
                    <?php endforeach ?>
                </td>
            </tr>

            <tr>
                <td><input type="submit" value="Alterar" class="btn btn-primary" /></td>
            </tr>

        </table>

    </form>
</html>
<?php include("rodape.php") ?>