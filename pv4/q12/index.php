<!DOCTYPE html>
<html>
<head>
    <title>Aumento de Preços</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input, button { padding: 8px; margin: 5px 0; }
        .result { background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
        table { border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Aumento de Preços</h2>
    <form method="post">
        <label>Digite os preços antigos separados por vírgula:</label><br>
        <input type="text" name="precos" placeholder="Ex: 15.50, 22.00, 30.75, 8.99" size="50"><br>
        <button type="submit">Aplicar Aumento</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precosInput = $_POST['precos'];
        $precosAntigos = array_map('floatval', explode(',', $precosInput));
        $precosNovos = array_map(function($preco) {
            return $preco * 1.10; // Aumento de 10%
        }, $precosAntigos);
        
        echo "<div class='result'>";
        echo "<h3>Resultados:</h3>";
        echo "<table>";
        echo "<tr><th>Preço Antigo</th><th>Preço Novo (+10%)</th></tr>";
        
        for ($i = 0; $i < count($precosAntigos); $i++) {
            echo "<tr>";
            echo "<td>" . number_format($precosAntigos[$i], 2) . "</td>";
            echo "<td>" . number_format($precosNovos[$i], 2) . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>
</html>