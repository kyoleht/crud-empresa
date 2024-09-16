<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "empresa";

$conn = mysqli_connect($server, $user, $password, $database);

function mensagem($texto, $tipo)
{
    echo "<div class='alert alert-$tipo' role='alert'>
  $texto
</div>";
}
