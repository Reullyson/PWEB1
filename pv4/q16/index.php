<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Senhas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input, button { padding: 8px; margin: 5px 0; }
        .result { background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
        .chars { font-family: monospace; font-size: 1.2em; }
    </style>
</head>
<body>
    <h2> Gerador de Senhas</h2>
    <form method="post">
        <label>Digite os caracteres permitidos separados por vírgula:</label><br>
        <input type="text" name="caracteres" placeholder="Ex: a,b,c,d,e,f,1,2,3,4,5,!,@,#,$,%" size="50"><br>
        <button type="submit">Gerar String Base</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $caracteresInput = $_POST['caracteres'];
        $caracteresArray = explode(',', $caracteresInput);
        $caracteresString = implode('', $caracteresArray);
        
        echo "<div class='result'>";
        echo "<h3>Resultados:</h3>";
        echo "Caracteres permitidos: <span class='chars'>" . htmlspecialchars($caracteresInput) . "</span><br>";
        echo "String base para senha: <span class='chars'>" . htmlspecialchars($caracteresString) . "</span><br>";
        echo "Tamanho: " . strlen($caracteresString) . " caracteres";
        echo "</div>";
    }
    ?>
</body>
</html>