<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $custoMaterial = 1765.88;
    $custoMaodeObra = 350.54;

    function sum($custoMaterial, $custoMaodeObra):float{
        $resultado = $custoMaterial + $custoMaodeObra;
        return $resultado;
    }

    $calc =sum($custoMaodeObra, $custoMaterial);
    print "O cálculo final do custo total é: $calc";

    ?>
    
</body>
</html>