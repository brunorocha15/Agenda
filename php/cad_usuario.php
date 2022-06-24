<?php
    session_start();
    include("conexao.php");

    $nome = $_POST['i_nome'];
    $sobrenome = $_POST['i_sobrenome'];
    $usuario = $_POST['i_usuario'];
    $senha = $_POST['i_senha'];

    $query_1 = "select * from usuario where login = '{$usuario}'";
    $resposta = mysqli_query($conexao, $query_1);
    $row = mysqli_num_rows($resposta);

   
?>
<html>

    <head>
        <title>Cadastro concluído</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/nav.css">
    </head>

    <body>
        <h1>Cadastro concluído!</h1>
        Faça o login <a href="../index.php">aqui!</a>
    </body>

</html>