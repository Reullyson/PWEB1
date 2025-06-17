<?php
$disciplinas = ['Português', 'Matemática', 'História', 'Geografia'];
$boletim = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($disciplinas as $disciplina) {
        $nota = (float)$_POST[strtolower($disciplina)];
        $boletim[$disciplina] = $nota;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Boletim Escolar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .disciplina { margin-bottom: 15px; }
        label { display: inline-block; width: 120px; }
        input { padding: 5px; width: 60px; }
        button { padding: 8px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .aprovado { color: green; }
        .reprovado { color: red; }
    </style>
</head>
<body>
    <h1>Boletim Escolar</h1>
    <form method="post">
        <?php foreach ($disciplinas as $disciplina): ?>
            <div class="disciplina">
                <label for="<?= strtolower($disciplina) ?>"><?= $disciplina ?>:</label>
                <input type="number" id="<?= strtolower($disciplina) ?>" name="<?= strtolower($disciplina) ?>" 
                       min="0" max="10" step="0.1" required>
            </div>
        <?php endforeach; ?>
        
        <button type="submit">Calcular Resultado</button>
    </form>

    <?php if (!empty($boletim)): ?>
        <h2>Resultado:</h2>
        <ul>
            <?php foreach ($boletim as $disciplina => $nota): ?>
                <li>
                    <?= $disciplina ?>: <?= number_format($nota, 1) ?> - 
                    <span class="<?= $nota >= 7 ? 'aprovado' : 'reprovado' ?>">
                        <?= $nota >= 7 ? 'Aprovado' : 'Reprovado' ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>