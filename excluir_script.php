<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Exclusão de Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php 
                include "conexao.php";

                $id = $_POST['id'];
                $nome = $_POST['nome'];

                $sql = "DELETE from pessoas WHERE id = $id";

                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome excluído com sucesso", 'success');
                } else {
                    mensagem("$nome NÃO excluído!", 'danger');
                }

                mysqli_close($conn);
            ?>

            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>

</html>
