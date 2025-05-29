<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $diasemana = 1;
    switch($diasemana){
        case "1":
            print("Domingo - lazer");
            break;
        case "2":
            print("Segunda - meditar");
            break;
        case "3":
            print("Terca - treino");
            break;
        case "4":
            print("Quarta - trabalho");
            break;
        case "5":
            print("Quinta - trabalho");
            break;
        case "6":
            print("Sexta - trabalho");
            break;
        case "7":
            print("Sabado - trabalho");
            default:
            print("Sua agenda e invalida.");
    }

    

    ?>


    
</body>
</html>