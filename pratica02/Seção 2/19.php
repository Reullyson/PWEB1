<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$cargo = strtolower("gerente");

switch($cargo){
    case "designer":
        echo "2425,00 R$";
        break;
    case "gerente":
        echo "4538,00 R$";
        break;
    case "desenvolvedor":
        echo "3340,00 R$";
        default:
        echo "Nao temos esse cargo presente";

}
?>
    
</body>
</html>