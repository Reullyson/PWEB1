<?php
$dadosSensor = [15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8];
$filtrados = array_filter($dadosSensor, function($valor) {
    return $valor > 25.0;
});
echo "Leituras acima de 25.0: " . implode(", ", $filtrados);
?>