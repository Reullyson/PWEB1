<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$valor = 1234.56;

function ValorMonetario($valor) {
    echo $valor = "R$ " . number_format($valor, 2,',', '.');
}

echo ValorMonetario($valor);

?>
    
</body>
</html>