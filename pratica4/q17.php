<?php
$textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";
$palavras = explode(" ", $textoAnalise);
echo "Palavras: " . implode(", ", $palavras) . "<br>";
echo "Quantidade: " . count($palavras);
?>