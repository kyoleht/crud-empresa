<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Cadastro Realizado!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php 
                include "conexao.php";

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $dt_nascimento = $_POST['dt_nascimento'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $hash_senha = password_hash($senha, PASSWORD_BCRYPT);

                $foto = $_FILES['foto'];
                $nome_foto = mover_foto($foto);

                $sql = "INSERT INTO pessoas (nome, endereco, telefone, dt_nascimento, email, senha, foto) VALUES ('$nome', '$endereco', '$telefone', '$dt_nascimento', '$email', '$senha', '$nome_foto')";

                if (mysqli_query($conn, $sql)) {
                    echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                    mensagem("$nome foi cadastrado com sucesso", 'success');
                } else {
                    mensagem("$nome NÃO foi cadastrado!", 'danger');
                }

                mysqli_close($conn);
            ?>

            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>

</html>
