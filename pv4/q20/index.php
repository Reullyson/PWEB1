<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inventário de Produtos</title>
</head>
<body>
  <h2>Gerenciar Inventário</h2>

  <form method="POST">
    <label>Produto:
      <input type="text" name="produto" required>
    </label><br><br>

    <label>Quantidade:
      <input type="number" name="quantidade" required>
    </label><br><br>

    <input type="submit" value="Adicionar/Atualizar Produto">
  </form>

  <hr>

  <?php
    $inventario = [
      'notebook' => 20,
      'mouse' => 50,
      'teclado' => 30
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto = strtolower(trim($_POST['produto']));
        $quantidade = intval($_POST['quantidade']);

        if (array_key_exists($produto, $inventario)) {
            $inventario[$produto] += $quantidade;
        } else {
            $inventario[$produto] = $quantidade;
        }
    }

    if (!array_key_exists('monitor', $inventario)) {
        $inventario['monitor'] = 15;
    }

    if (array_key_exists('notebook', $inventario)) {
        $inventario['notebook'] += 5;
    }

    echo "<h3>Inventário Atualizado:</h3><ul>";
    foreach ($inventario as $item => $qtd) {
        echo "<li><strong>$item</strong>: $qtd unidades</li>";
    }
    echo "</ul>";
  ?>
</body>
</html>
