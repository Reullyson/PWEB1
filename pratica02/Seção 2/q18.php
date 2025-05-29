<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cor = strtolower("verde");

    switch($cor){
        case "verde":
            echo "Cor Verde selecionada!";
            break;
        case "vermelho":
            echo "Cor Vermelha selecionada!";
            break;
        case "azul":
            echo "Cor Azul selecionada!";
            break;
        default:
        echo "Tem certeza que vai escolher esta cor?";
    }
    ?>
    
</body>
</html>