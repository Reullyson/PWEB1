<!DOCTYPE html>
<html>
<head>
    <title>Média de Despesas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input, button { padding: 8px; margin: 5px 0; }
        .result { background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Média de Despesas</h2>
    <form method="post">
        <label>Digite as despesas separadas por vírgula:</label><br>
        <input type="text" name="despesas" placeholder="Ex: 1200.50, 850.75, 1500.00, 920.30, 1100.20" size="50"><br>
        <button type="submit">Calcular Média</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $despesasInput = $_POST['despesas'];
        $despesas = array_map('floatval', explode(',', $despesasInput));
        
        $soma = array_sum($despesas);
        $quantidade = count($despesas);
        $media = $soma / $quantidade;
        
        echo "<div class='result'>";
        echo "<h3>Resultados:</h3>";
        echo "Despesas: " . implode(", ", $despesas) . "<br>";
        echo "Total de despesas: " . number_format($soma, 2) . "<br>";
        echo "Número de despesas: $quantidade<br>";
        echo "Média das despesas: " . number_format($media, 2);
        echo "</div>";
    }
    ?>
</body>
</html>