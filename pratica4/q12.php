<?php
$precosAntigos = [15.50, 22.00, 30.75, 8.99];

$precosNovos = array_map(function($preco) {
    return $preco * 1.10;
}, $precosAntigos);

echo "Antigos: " . implode(", ", $precosAntigos) . "<br>";
echo "Novos: " . implode(", ", $precosNovos);
?>