<?php
$precosProdutos = [
    "Arroz" => 5.00,
    "Feijão" => 4.20,
    "Açúcar" => 3.50,
    "Café" => 8.75,
    "Leite" => 4.80
];

asort($precosProdutos);
foreach ($precosProdutos as $produto => $preco) {
    echo "$produto: R$ $preco<br>";
}
?>