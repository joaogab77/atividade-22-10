<?php

$host = "localhost"; 
$usuario = "root";
$senha = ""; 
$banco = "DB_industria"; 


$conn = new mysqli($host, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

echo "Conexão estabelecida com sucesso!";
?>
