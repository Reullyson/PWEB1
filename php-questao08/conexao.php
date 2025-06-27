<?php

$host = "localhost";
$usuario = "root";
$senha = "1234";    
$banco = "loja"; 


$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão realizada com sucesso!";
?>
