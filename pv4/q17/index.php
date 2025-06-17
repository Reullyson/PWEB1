<!DOCTYPE html>
<html>
<head>
    <title>Análise de Texto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        textarea, button { padding: 8px; margin: 5px 0; }
        .result { background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
        textarea { width: 100%; height: 100px; }
        ul { list-style-type: none; padding: 0; }
        li { padding: 3px 0; }
    </style>
</head>
<body>
    <h2> Análise de Texto</h2>
    <form method="post">
        <label>Digite o texto para análise:</label><br>
        <textarea name="texto" placeholder="Ex: A programação PHP é fundamental para o desenvolvimento web"></textarea><br>
        <button type="submit">Analisar Texto</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];
        $palavras = explode(' ', $texto);
        $quantidade = count($palavras);
        
        echo "<div class='result'>";
        echo "<h3>Resultados:</h3>";
        echo "Texto original: \"$texto\"<br>";
        echo "Quantidade de palavras: $quantidade<br>";
        echo "Palavras separadas:<br>";
        echo "<ul>";
        
        foreach ($palavras as $palavra) {
            echo "<li>" . htmlspecialchars($palavra) . "</li>";
        }
        
        echo "</ul>";
        echo "</div>";
    }
    ?>
</body>
</html>