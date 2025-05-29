<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $p1 = 4;
    $p2 = 5;

    $media = $p1+$p2/2;

    if($media >= 7){
        print("Aprovado!");
    }if($media <= 6.9 && $media >= 5) {
        print("Recuperacao");
    }if($media < 5){
        print("Reprovado");
    }
    ?>
    
</body>
</html>