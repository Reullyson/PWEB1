<!DOCTYPE html>
<html>
<head>
    <title>Filtragem de Dados</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input, button { padding: 8px; margin: 5px 0; }
        .result { background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Filtragem de Dados</h2>
    <form method="post">
        <label>Digite os valores do sensor separados por vírgula:</label><br>
        <input type="text" name="dados" placeholder="Ex: 15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8" size="50"><br>
        <button type="submit">Filtrar Valores (>25.0)</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dadosInput = $_POST['dados'];
        $dadosSensor = array_map('floatval', explode(',', $dadosInput));
        $dadosFiltrados = array_filter($dadosSensor, function($valor) {
            return $valor > 25.0;
        });
        
        echo "<div class='result'>";
        echo "<h3>Resultados:</h3>";
        echo "Valores originais: " . implode(", ", $dadosSensor) . "<br>";
        echo "Valores filtrados (>25.0): " . implode(", ", $dadosFiltrados);
        echo "</div>";
    }
    ?>
</body>
</html>