<!DOCTYPE html>
<html>
<head>
    <title> Temperaturas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input, button { padding: 8px; margin: 5px 0; }
        .result { background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Temperaturas Máxima e Mínima</h2>
    <form method="post">
        <label>Digite 7 temperaturas separadas por vírgula:</label><br>
        <input type="text" name="temperaturas" placeholder="Ex: 25.5, 30.0, 22.3, 18.7, 28.9, 20.1, 19.5" size="50"><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperaturasInput = $_POST['temperaturas'];
        $temperaturas = array_map('floatval', explode(',', $temperaturasInput));
        
        if (count($temperaturas) >= 7) {
            $maxima = max($temperaturas);
            $minima = min($temperaturas);
            
            echo "<div class='result'>";
            echo "<h3>Resultados:</h3>";
            echo "Temperaturas registradas: " . implode(", ", $temperaturas) . "<br>";
            echo "Temperatura máxima: $maxima<br>";
            echo "Temperatura mínima: $minima";
            echo "</div>";
        } else {
            echo "<div class='result'>Por favor, insira pelo menos 7 temperaturas separadas por vírgula.</div>";
        }
    }
    ?>
</body>
</html>