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

function mostra_data($data) {
  $date = explode('-', $data);
  $escreve = $date[2] . '/'. $date[1] . '/'. $date[0];
  return $escreve;
}
