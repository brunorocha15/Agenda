<?php

    session_start();
    include("conexao.php");
    
    if(isset($_SESSION['usuario'])){

        $fk_usuario = $_SESSION['usuario'];
        $titulo = $_POST['i_titulo'];
        $descricao = $_POST['i_descricao'];
        $data_validade = $_POST['i_dtval'];


        $query_1 = "insert into produto (fk_usuario, titulo, descricao, data_validade)
                    values ('{$fk_usuario}', '{$titulo}', '{$descricao}', '{$data_validade}')";

        mysqli_query($conexao, $query_1);

    }else{
        header('Location: ../index.php');
    }

?>

<html>