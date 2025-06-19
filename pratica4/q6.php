<?php
$categoriasProdutos = ["Eletrônicos", "Vestuário", "Livros", "Alimentos", "Brinquedos"];

$ordenado = $categoriasProdutos;
sort($ordenado);
echo "Ordem alfabética: " . implode(", ", $ordenado) . "<br>";

rsort($ordenado);
echo "Ordem decrescente: " . implode(", ", $ordenado);
?>