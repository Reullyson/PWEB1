<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    for($i = 0;$i < 100; $i++){
        print("<p>processamento: </p>".$i);
        if($i == 50){
            break;
        }
    
    }

    ?>

</body>
</html>