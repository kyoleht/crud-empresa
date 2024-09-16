<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Cadastro - Empresa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="POST">
                    <div class="mb-3 row">
                        <div class="form-group mb-3">
                            <label for="nome">Nome Completo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="endereco">Endereço</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="endereco">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tel">Telefone</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="telefone">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nascimento">Data de Nascimento</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="dt_nascimento">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Senha">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="senha" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" class="btn btn-success" value="Enviar">
                        </div>
                    </div>
                </form>
                <a href="index.php" class="btn btn-info">Início</a>
            </div>
        </div>
    </div>
</body>

</html>
