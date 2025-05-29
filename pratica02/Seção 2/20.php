<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $ativo = true;
    $adm = true;

    if($ativo == true && $adm == true){
        echo " Usuario ativo, com acesso total ao login.";
    }else{
        echo "Usuario inativo.";
    }

    ?>

</body>
</html>