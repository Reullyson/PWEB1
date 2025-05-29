<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
     print("<h3> 26 - Entrada de dados repetitiva: </h3> <br>");
      $lista = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0); 
      $aux = 10; 
      do{
          print("<p> Pedidno Informação!...". $lista[$aux]. "</p>");
          $aux--;
      }while($aux >=0);
    
    ?>
</body>
</html>