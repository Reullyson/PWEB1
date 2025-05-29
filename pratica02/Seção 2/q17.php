<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $temp = 12;

    if($temp <= 0){
        print("Alerta de Gelo!");
    }if($temp >= 1 && $temp <= 15){
        print("Clima Ameno");
    }if($temp >= 16 && $temp <= 25 ){
        print("Clima Agradavel");
    }if($temp > 26){
        print("atencao: Calor Extremo!");
    }

    ?>
    
</body>
</html>