<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function elegibilidade($idade) {
    if ($idade >= 18) {
        echo "Acesso Liberado";
    } else {
        echo "Acesso Negado";
    }
}

$idade = 18;
echo elegibilidade($idade);
    
?>

</body>
</html>