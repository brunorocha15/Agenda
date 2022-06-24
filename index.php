<?php session_start();?>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/form_box.css">
    </head>

    <body>
    <form action="php/login.php" method="post">

        <div class="container">
            <div class="form_box">
                <div class="h1_box">

                    <h1>Login</h1>
                </div>
                
                <?php
                    if(isset($_SESSION['not_autenticado'])){
                ?>
                    <div class="erro_box">
                        Usuário ou senha inválidos!
                    </div>
                <?php 
                    }
                    unset($_SESSION['not_autenticado']);
                ?>
                <form action="php/login.php" method="post">
                    <label>Login</label>
                    <input type="text" name="i_login" class="i_text">
                   
                    <label>Senha</label>
                    <input type="password" name="i_senha" class="i_text">
                    
                    <input type="submit" value="Logar" id="btt_form">
                </form>

                

                <div class="link_box">
                    Ainda não tem conta? <a href="novo_cadastro.php">Cadastre-se</a>
                </div>
            </div>
        </div>
    </body>
</html>