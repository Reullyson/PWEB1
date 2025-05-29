<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bebida = "cha";
switch($bebida){
        case "cha":
            print("<p> Você escolheu:  </p>".$bebida);
            break;
        case "suco":
            print("<p> Você escolheu:  </p>".$bebida);
            break;
        case "cafe":
            print("<p> Você escolheu:  </p>".$bebida);
            break;
        default:
        print("Nao temos disponivel.");
        }

    ?>
    
</body>
</html>