<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Pesquisar - Empresa</title>
</head>

<body>

<?php 

include "conexao.php";

$pesquisa = $_POST['busca'] ?? '';


$sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);

while($linha = mysqli_fetch_assoc($dados)) {
    foreach ($linha as $key => $value) {
        echo "$key: $value <br>";
    }
}



?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                            <button class="btn btn-outline-success" type="submit">OK</button>
                        </form>
                    </div>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Rafa</td>
                            <td>Lá</td>
                            <td>40028922</td>
                            <td>Aquela</td>
                            <td>Aquele lá</td>
                            <td>Aquela lá</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacbo</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

                <a href="index.php" class="btn btn-primary">Início</a>
            </div>
        </div>
    </div>
</body>

</html>