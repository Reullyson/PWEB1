<?php
include 'helpers.php';
$notas = [7.5, 8.0, 9.0];
$media = calcularMedia($notas);
echo "Média das notas: " . number_format($media, 2, ',', '.') . "<br>";

$preco = 1234.5;
echo "Preço formatado: " . formatarPreco($preco);
?>