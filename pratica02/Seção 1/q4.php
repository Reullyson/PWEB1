<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pedido = false;
    $status = false;

    
    if ($status) {
        print "Seu pedido está feito! ";

    }else{
        print "Seu pedido ainda está fazendo...  ";}
    if($pedido){
        print "e está está a caminho";
    }else{
        print "Seu pedido não foi entregue, pois o estamos produzindo!";
    }

?>

</body>
</html>