<?php
$produtos = [
    ["Celular", "SKU123"],
    ["Notebook", "SKU456"],
    ["Fone de Ouvido", "SKU789"],
    ["Teclado", "SKU321"],
    ["Mouse", "SKU654"]
];

foreach ($produtos as $produto) {
    echo "Produto: {$produto[0]} - SKU: {$produto[1]}<br>";
}
?>