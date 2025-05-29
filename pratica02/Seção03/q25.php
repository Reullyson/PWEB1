<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$dicionario = [
    '1' => ['nome' => 'Joao', 'matricula' => '12345', 'nota' => 5],
    '2' => ['nome' => 'maria1', 'matricula' => '543212', 'nota' => 7],
    '3' => ['nome' => 'maria2', 'matricula' => '543213', 'nota' => 8],
    '4' => ['nome' => 'maria3', 'matricula' => '543214', 'nota' => 4],
    '5' => ['nome' => 'maria4', 'matricula' => '543215', 'nota' => 6],
    '6' => ['nome' => 'maria5', 'matricula' => '543216', 'nota' => 10],
    '7' => ['nome' => 'maria6', 'matricula' => '543217', 'nota' => 9],
    '8' => ['nome' => 'maria7', 'matricula' => '543218', 'nota' => 5],
    '9' => ['nome' => 'maria8', 'matricula' => '543219', 'nota' => 8],
    '10' => ['nome' => 'maria9', 'matricula' => '543210', 'nota' => 7]
];

$qtd = count($dicionario);
for($i = 1; $i <= $qtd; $i++) {
    echo "____________________________________________";
    echo "<p>Nome: ". $dicionario[$i]['nome'] . "</p>";
    echo "<p>Matricula: ". $dicionario[$i]['matricula'] . "</p>";
    echo "<p>Nota: ". $dicionario[$i]['nota'] . "</p>";
    echo "____________________________________________";
}
    ?>
    
</body>
</html>