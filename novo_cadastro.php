<?php session_start(); ?>

<html>

    <head>
        <title>Novo usuario</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/form_box.css">
    </head>

    <body>
        <form action="php/cad_usuario.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="form_box">
                     <div class="h1_box">         
                            <h1>Novo cadastro</h1>
                    </div>
                            <label>Nome</label>
                            <input type="text" name="i_nome" class="i_text" required>

                            <label>Sobrenome</label>
                            <input type="text" name="i_sobrenome" class="i_text" required>

                            <?php
                            if(isset($_SESSION['not_usuario'])){
                            ?>
                                <div class="erro_box">
                                    O nome de usuário já está em uso!
                                </div>
                            <?php
                            }
                            unset($_SESSION['not_usuario']);
                            ?>

                            <label>Nome de usuário</label>
                            <input type="text" name="i_usuario" class="i_text" required>

                            <label>Senha</label>
                            <input type="password" name="i_senha" class="i_text" required>


                            <input type="submit" value="Cadastrar" class="btt_form">

                            <div class="link_box">
                                <a href="index.html">Voltar</a>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </body>

</html>