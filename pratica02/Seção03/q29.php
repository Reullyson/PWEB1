<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    print("<h3>29 - Ciclo de Produção:</h3><br>");
$produtos = array(); 
$produz = 1; 
while (true) {
    print("<p>Produzindo item...</p>");
    $produtos[] = $produz; 
    $qtd = count($produtos);
    $soma = 0; 
    $produz++; 

    for ($i = 0; $i < $qtd; $i++) {
        $soma += $produtos[$i]; 
    }
    print("<p>Quantidade atual: " . $soma . "</p>"); 
    if ($produz >= 50) {
        print("<p>Fim da produção!</p>");
        break;
    }
}
    ?>
</body>
</html>