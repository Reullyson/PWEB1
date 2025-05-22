<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $comprimento = 14.3;
    $largura = 56.9;

    function media($largura,$comprimento):float{
        $media = $largura * $comprimento;
        return $media;
    }

    $hectar_media = media($largura,$comprimento);
    print( "o calculo final é: $hectar_media ");
    ?>
</body>
</html>