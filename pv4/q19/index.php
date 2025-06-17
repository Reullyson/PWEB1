<!DOCTYPE html>
<html>
<head>
    <title>Fila de Atendimento</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input, button { padding: 8px; margin: 5px 0; }
        .result { background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
        ol { padding-left: 20px; }
    </style>
</head>
<body>
    <h2>Fila de Atendimento</h2>
    <form method="post">
        <label>Digite os nomes dos pacientes na fila separados por vírgula:</label><br>
        <input type="text" name="fila" placeholder="Ex: João Silva, Maria Santos, Pedro Costa" size="50"><br>
        <label>Paciente prioritário (adiciona no início):</label><br>
        <input type="text" name="prioritario" placeholder="Ex: Ana Oliveira"><br>
        <label>Paciente regular (adiciona no final):</label><br>
        <input type="text" name="regular" placeholder="Ex: Luiz Fernandes"><br>
        <button type="submit">Atualizar Fila</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filaInput = $_POST['fila'];
        $filaAtendimento = explode(',', $filaInput);
        $filaAtendimento = array_map('trim', $filaAtendimento);
        
        $prioritario = trim($_POST['prioritario']);
        $regular = trim($_POST['regular']);
        
        if (!empty($prioritario)) {
            array_unshift($filaAtendimento, $prioritario);
        }
        
        if (!empty($regular)) {
            array_push($filaAtendimento, $regular);
        }
        
        echo "<div class='result'>";
        echo "<h3>Fila de Atendimento Atualizada:</h3>";
        
        if (count($filaAtendimento) > 0) {
            echo "<ol>";
            foreach ($filaAtendimento as $paciente) {
                echo "<li>$paciente</li>";
            }
            echo "</ol>";
        } else {
            echo "A fila está vazia.";
        }
        
        echo "</div>";
    }
    ?>
</body>
</html>