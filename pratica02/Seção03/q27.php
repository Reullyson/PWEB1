<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    print("<h3> 27 - Listagem de Participantes: </h3> <br>");
        $participantes = [
        '1' => ['nome' => 'Joao'],
        '2' => ['nome' => 'José'],
        '3' => ['nome' => 'Pedro'],
        '4' => ['nome' => 'Gabriel'],
        '5' => ['nome' => 'Rafel'],
        '6' => ['nome' => 'Maria'],
        '7' => ['nome' => 'Joana'],
        '8' => ['nome' => 'Miguel'],
        '9' => ['nome' => 'Marcela'],
        '10' => ['nome' => 'Lucas']
    ];
    $aux = 1; 
    while(true){
      print("<p> Participante numero: ". $aux. ". Nome: ". $participantes[$aux]['nome']);

      $aux++;
      if($aux >10){
        print("<p> Fim da Lista</p>");
        break;
      }
    }

    ?>
</body>
</html>