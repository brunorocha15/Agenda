<?php
    
    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario'])){

        $id_tarefa = $_GET['id'];
        $query_1 = "select * from produto where id_prod = '{$id_produto}'";
        $resposta = mysqli_query($conexao, $query_1);

        $row = mysqli_fetch_assoc($resposta);

    }else{
        header('Location: ../index.php');
    }

?>

<html>

    <head>
        <title>Editar tarefa</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/form_box.css">
    </head>

    <body>
        <form action="atualizar.php?id=<?php echo $row['id_prod'] ?>" method="post">
            <div class="form_box">

                <h1>Editar tarefa</h1>

                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" value="<?php echo $row['titulo'] ?>" required>

                <label>Descrição</label>
                <textarea name="i_descricao" cols="30" rows="10" class="i_area" required><?php echo $row['descricao'] ?></textarea>

                    

                </select>

                <input type="submit" value="Salvar edição" class="btt_form">

                <a href="lista.php">Voltar</a>

            </div>
        </form>
    </body>

</html>