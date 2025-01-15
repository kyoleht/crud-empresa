<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Alterado com Sucesso!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php 
                include "conexao.php";

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $dt_nascimento = $_POST['dt_nascimento'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $hash_senha = password_hash($senha, PASSWORD_BCRYPT);

                $sql = "UPDATE pessoas set 'nome' = $nome, 'endereco' = $endereco, 'telefone' = $telefone, 'dt_nascimento' = $dt_nascimento, 'email' = $email, 'senha' = $senha WHERE id = $id";

                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome alterado com sucesso", 'success');
                } else {
                    mensagem("$nome NÃO foi alterado!", 'danger');
                }

                mysqli_close($conn);
            ?>

            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>

</html>
