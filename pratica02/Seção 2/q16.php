<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $estado = "C";
    switch($estado){
        case "C":
            print("Casado");
            break;
        case "S":
            print("Solteiro");
            break;
        case "D":
            print("Divorciado");
            break;
        case "O":
            break;
            print("Outro");
            break;    
    }
    ?>
</body>
</html>