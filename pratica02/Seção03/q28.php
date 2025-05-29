<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     print("<h3> 28 - Total de Vendas: </h3> <br>");
      $numeros = [];
      $total = 0; 
      for($i = 0; $i<=100; $i++){
        $numeros[] = rand(50, 5000); 
      }
    for($j = 0; $j<=100; $j++){
        $total += $numeros[$j]; 
    }
    print("<p> A soma total é: R$" .number_format($total, 4, '.', ","). "</p>"); 
  

    ?>
</body>
</html>