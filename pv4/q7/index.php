<?php
if ($_POST) {
    $produto1 = $_POST['produto1'];
    $preco1 = $_POST['preco1'];
    $produto2 = $_POST['produto2'];
    $preco2 = $_POST['preco2'];
    $produto3 = $_POST['produto3'];
    $preco3 = $_POST['preco3'];
    $produto4 = $_POST['produto4'];
    $preco4 = $_POST['preco4'];
    $produto5 = $_POST['produto5'];
    $preco5 = $_POST['preco5'];
    
    $produtos = array(
        $produto1 => $preco1,
        $produto2 => $preco2,
        $produto3 => $preco3,
        $produto4 => $preco4,
        $produto5 => $preco5
    );
    
    $ordenados = $produtos;
    $nomes = array_keys($ordenados);
    $valores = array_values($ordenados);
    
    for ($i = 0; $i < count($valores); $i++) {
        for ($j = $i + 1; $j < count($valores); $j++) {
            if ($valores[$i] > $valores[$j]) {
                $temp_valor = $valores[$i];
                $valores[$i] = $valores[$j];
                $valores[$j] = $temp_valor;
                
                $temp_nome = $nomes[$i];
                $nomes[$i] = $nomes[$j];
                $nomes[$j] = $temp_nome;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ordenação por Preço</title>
</head>
<body>
    <h1>Ordenação de Produtos por Preço</h1>
    <form method="post">
        Produto 1: <input type="text" name="produto1"> Preço: <input type="number" step="0.01" name="preco1"><br>
        Produto 2: <input type="text" name="produto2"> Preço: <input type="number" step="0.01" name="preco2"><br>
        Produto 3: <input type="text" name="produto3"> Preço: <input type="number" step="0.01" name="preco3"><br>
        Produto 4: <input type="text" name="produto4"> Preço: <input type="number" step="0.01" name="preco4"><br>
        Produto 5: <input type="text" name="produto5"> Preço: <input type="number" step="0.01" name="preco5"><br>
        <input type="submit" value="Ordenar">
    </form>

    <?php if ($_POST): ?>
        <h2>Original:</h2>
        <?php foreach ($produtos as $nome => $preco): ?>
            <?= $nome ?>: R$ <?= number_format($preco, 2) ?><br>
        <?php endforeach; ?>

        <h2>Ordenado por Preço:</h2>
        <?php for ($i = 0; $i < count($nomes); $i++): ?>
            <?= $nomes[$i] ?>: R$ <?= number_format($valores[$i], 2) ?><br>
        <?php endfor; ?>
    <?php endif; ?>
</body>
</html>