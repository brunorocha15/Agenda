<?php
    include("verifica_usuario.php");
?>

<html>

    <head>
        <title>Adicionar Produto</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/form.css">
    </head>

    <body>
        <form action="cad_produto.php" method="post">
            <div class="form_box">

                <h1>Adicionar Produto</h1>

                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" required>

                <label>Descrição</label>
                <textarea name="i_descricao" cols="30" rows="10" class="i_area" required></textarea>


                <input type="submit" value="Adicionar Produto" class="btt_form">

                <a href="painel.php">Voltar</a>

            </div>
        </form>
    </body>

</html>