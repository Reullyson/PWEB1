<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produtos = [];
    for ($i = 1; $i <= 5; $i++) {
        if (!empty($_POST["nome$i"]) && !empty($_POST["sku$i"])) {
            $produtos[] = [
                'nome' => $_POST["nome$i"],
                'sku' => $_POST["sku$i"]
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .produto { margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        label { display: inline-block; width: 100px; }
        input { padding: 5px; margin-right: 10px; }
        button { padding: 8px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="produto">
                <h3>Produto <?= $i ?></h3>
                <label for="nome<?= $i ?>">Nome:</label>
                <input type="text" id="nome<?= $i ?>" name="nome<?= $i ?>" required>
                
                <label for="sku<?= $i ?>">SKU:</label>
                <input type="text" id="sku<?= $i ?>" name="sku<?= $i ?>" required>
            </div>
        <?php endfor; ?>
        
        <button type="submit">Cadastrar Produtos</button>
    </form>

    <?php if (!empty($produtos)): ?>
        <h2>Produtos Cadastrados:</h2>
        <ul>
            <?php foreach ($produtos as $produto): ?>
                <li>Produto: <?= htmlspecialchars($produto['nome']) ?> - SKU: <?= htmlspecialchars($produto['sku']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>