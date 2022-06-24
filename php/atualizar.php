<?php

    include("conexao.php");

    $id_prod = $_GET['id'];
    $titulo= $_POST['i_titulo'];
    $descricao = $_POST['i_descricao'];


    $query_1 = "update pruduto set titulo = '{$titulo}', descricao = '{$descricao}',  where id_tarefa = '{$id_tarefa}'";
    
    if(mysqli_query($conexao, $query_1)){
        header('Location: lista.php');
    }else{
        ?>
        <h1> Erro na atualização do registro! </h1>
        <a href="lista.php">Voltar</a>
        <?php
    }

?>