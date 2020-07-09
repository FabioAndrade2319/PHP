<?php

function listaCategorias($conexao){
    $categs = array();
    $resultado = mysqli_query($conexao,"select * from categoria");
    while($cat = mysqli_fetch_assoc($resultado)){
        array_push($categs,$cat);
    }
    return $categs;
}

?>