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

?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">OK</button>
                        </form>
                    </div>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php           
                    

                        while($linha = mysqli_fetch_assoc($dados)) {
                            $id = $linha['id'];
                            $nome = $linha['nome'];
                            $endereco = $linha['endereco'];
                            $telefone = $linha['telefone'];
                            $dt_nascimento = $linha['dt_nascimento'];
                            $email = $linha['email'];
                            $senha = $linha['senha'];
                            $dt_nascimento = mostra_data($dt_nascimento);

                            echo "<tr>
                                    <th scope='row'>$nome</th>
                                    <td>$endereco</td>
                                    <td>$telefone</td>
                                    <td>$dt_nascimento</td>
                                    <td>$email</td>
                                    <td>$senha</td>
                                    <td width=150px>
                                    <a href='editar.php?id=$id' class='btn btn-success btn-sm'>Editar</a>      
                                    <a href='excluir.php' class='btn btn-danger btn-sm'>Excluir</a>
                                    </td>                             
                              </tr>";
                                
                        
                        }

                    ?>

                    </tbody>
                </table>

                <a href="index.php" class="btn btn-primary">Início</a>
            </div>
        </div>
    </div>
</body>

</html>

