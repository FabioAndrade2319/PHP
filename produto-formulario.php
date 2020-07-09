<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-categoria.php") ?>

<?php $categorias = listaCategorias($conexao) ?>


<html>
    <h1>Incluir Produto</h1>
    <form action="adiciona-produto.php" method="POST">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" class="form-control"/></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input type="number" name="preco" class="form-control"/></td>
            </tr>

             <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control"/></textarea></td>
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
                <td><input type="submit" value="Cadastrar" class="btn btn-primary" /></td>
            </tr>

        </table>

    </form>
</html>
<?php include("rodape.php") ?>