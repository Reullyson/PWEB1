<?php
session_start();

if (!isset($_SESSION['livros'])) {
    $_SESSION['livros'] = ['Dom Quixote', '1984', 'O Pequeno Príncipe', 'A Metamorfose'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['adicionar']) && !empty($_POST['novo_livro'])) {
        $_SESSION['livros'][] = $_POST['novo_livro'];
    } elseif (isset($_POST['remover']) && isset($_POST['indice'])) {
        $indice = (int)$_POST['indice'];
        if (isset($_SESSION['livros'][$indice])) {
            array_splice($_SESSION['livros'], $indice, 1);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Estoque de Livraria</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .section { margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px; }
        label { display: inline-block; width: 150px; }
        input[type="text"] { padding: 5px; width: 200px; }
        button { padding: 8px 15px; margin: 5px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button.remover { background-color: #f44336; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Gestão de Estoque de Livraria</h1>
    
    <div class="section">
        <h2>Adicionar Novo Livro</h2>
        <form method="post">
            <label for="novo_livro">Título do Livro:</label>
            <input type="text" id="novo_livro" name="novo_livro" required>
            <button type="submit" name="adicionar">Adicionar ao Estoque</button>
        </form>
    </div>
    
    <div class="section">
        <h2>Remover Livro</h2>
        <form method="post">
            <label for="indice">Índice do Livro:</label>
            <input type="number" id="indice" name="indice" min="0" max="<?= count($_SESSION['livros']) - 1 ?>" required>
            <button type="submit" name="remover" class="remover">Remover Livro</button>
        </form>
    </div>
    
    <div class="section">
        <h2>Estoque Atual</h2>
        <?php if (!empty($_SESSION['livros'])): ?>
            <table>
                <tr>
                    <th>Índice</th>
                    <th>Título do Livro</th>
                </tr>
                <?php foreach ($_SESSION['livros'] as $indice => $livro): ?>
                    <tr>
                        <td><?= $indice ?></td>
                        <td><?= htmlspecialchars($livro) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>O estoque está vazio.</p>
        <?php endif; ?>
    </div>
</body>
</html>