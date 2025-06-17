<?php
$especiesObservadas = ["Beija-flor", "Canário", "Bem-te-vi", "Sabia", "Beija-flor", "Coruja"];
$especiesUnicas = array_unique($especiesObservadas);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $especiePesquisada = trim($_POST['especie']);
    $encontrada = in_array($especiePesquisada, $especiesObservadas);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Espécies de Pássaros Observadas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .section { margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px; }
        label { display: inline-block; width: 150px; }
        input[type="text"] { padding: 5px; width: 200px; }
        button { padding: 8px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .resultado { margin-top: 15px; padding: 10px; background-color: #f8f8f8; border-radius: 4px; }
        .encontrada { color: green; }
        .nao-encontrada { color: red; }
        ul { list-style-type: none; padding: 0; }
        li { padding: 5px 0; }
    </style>
</head>
<body>
    <h1>Espécies de Pássaros Observadas</h1>
    
    <div class="section">
        <h2>Verificar Espécie</h2>
        <form method="post">
            <label for="especie">Espécie a verificar:</label>
            <input type="text" id="especie" name="especie" required>
            <button type="submit">Verificar</button>
        </form>
        
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="resultado">
                <p>A espécie "<?= htmlspecialchars($especiePesquisada) ?>" 
                   <span class="<?= $encontrada ? 'encontrada' : 'nao-encontrada' ?>">
                       <?= $encontrada ? 'foi encontrada' : 'não foi encontrada' ?>
                   </span> na lista de observações.
                </p>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="section">
        <h2>Espécies Únicas Observadas</h2>
        <p>Total de espécies únicas: <?= count($especiesUnicas) ?></p>
        <ul>
            <?php foreach ($especiesUnicas as $especie): ?>
                <li><?= htmlspecialchars($especie) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>