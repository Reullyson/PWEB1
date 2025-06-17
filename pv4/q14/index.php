<!DOCTYPE html>
<html>
<head>
    <title>Registros de Treino</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input, button, textarea { padding: 8px; margin: 5px 0; }
        .result { background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
        table { border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        textarea { width: 300px; height: 100px; }
    </style>
</head>
<body>
    <h2>Registros de Treino</h2>
    <form method="post">
        <label>Digite os dados dos alunos no formato JSON:</label><br>
        <textarea name="alunos" placeholder='Ex: 
{
    "João": [45, 50, 55],
    "Maria": [60, 65, 70],
    "Carlos": [40, 42, 45]
}'></textarea><br>
        <button type="submit">Calcular Médias</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $alunosJson = $_POST['alunos'];
        $registrosTreino = json_decode($alunosJson, true);
        
        if ($registrosTreino) {
            echo "<div class='result'>";
            echo "<h3>Resultados:</h3>";
            echo "<table>";
            echo "<tr><th>Aluno</th><th>Sessões de Treino</th><th>Média</th></tr>";
            
            foreach ($registrosTreino as $aluno => $sessoes) {
                $media = array_sum($sessoes) / count($sessoes);
                echo "<tr>";
                echo "<td>$aluno</td>";
                echo "<td>" . implode(", ", $sessoes) . "</td>";
                echo "<td>" . number_format($media, 2) . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "</div>";
        } else {
            echo "<div class='result'>Formato inválido. Por favor, insira os dados no formato especificado.</div>";
        }
    }
    ?>
</body>
</html>