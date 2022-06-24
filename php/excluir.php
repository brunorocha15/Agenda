<?php

    include("conexao.php");

    $id_produto = $_GET['id_t'];
    $query_1 = "delete from produto where id_prod = '{$id_produto}'";

    if(mysqli_query($conexao, $query_1)){
        header('Location: lista.php');
    }else{
        ?>
        <h1>Erro na hora de deletar o registro!</h1>
        <a href="lista.php">Voltar</a>
        <?php
    }

?>