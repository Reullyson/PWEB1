<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
function calcularCustoTotal($precoUnitario, $quantidade) {
    return $precoUnitario * $quantidade;
}

$precounitario = 11.50;
$quantidade = 6;

$custototal = calcularCustoTotal($precounitario, $quantidade);
echo "Custo total: R$ " . number_format($custototal, 2, ',', '.');
?>

</body>
</html>