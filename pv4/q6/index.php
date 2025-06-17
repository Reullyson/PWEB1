<?php
if ($_POST) {
    $categoria1 = $_POST['categoria1'];
    $categoria2 = $_POST['categoria2'];
    $categoria3 = $_POST['categoria3'];
    $categoria4 = $_POST['categoria4'];
    $categoria5 = $_POST['categoria5'];
    
    $categorias = array($categoria1, $categoria2, $categoria3, $categoria4, $categoria5);
    
    $ordenadas_asc = $categorias;
    for ($i = 0; $i < count($ordenadas_asc); $i++) {
        for ($j = $i + 1; $j < count($ordenadas_asc); $j++) {
            if ($ordenadas_asc[$i] > $ordenadas_asc[$j]) {
                $temp = $ordenadas_asc[$i];
                $ordenadas_asc[$i] = $ordenadas_asc[$j];
                $ordenadas_asc[$j] = $temp;
            }
        }
    }
    
    $ordenadas_desc = $categorias;
    for ($i = 0; $i < count($ordenadas_desc); $i++) {
        for ($j = $i + 1; $j < count($ordenadas_desc); $j++) {
            if ($ordenadas_desc[$i] < $ordenadas_desc[$j]) {
                $temp = $ordenadas_desc[$i];
                $ordenadas_desc[$i] = $ordenadas_desc[$j];
                $ordenadas_desc[$j] = $temp;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ordenação de Categorias</title>
</head>
<body>
    <h1>Ordenação de Categorias</h1>
    <form method="post">
        Categoria 1: <input type="text" name="categoria1"><br>
        Categoria 2: <input type="text" name="categoria2"><br>
        Categoria 3: <input type="text" name="categoria3"><br>
        Categoria 4: <input type="text" name="categoria4"><br>
        Categoria 5: <input type="text" name="categoria5"><br>
        <input type="submit" value="Ordenar">
    </form>

    <?php if ($_POST): ?>
        <h2>Original:</h2>
        <?php foreach ($categorias as $cat): ?>
            <?= $cat ?><br>
        <?php endforeach; ?>

        <h2>Ordenado A-Z:</h2>
        <?php foreach ($ordenadas_asc as $cat): ?>
            <?= $cat ?><br>
        <?php endforeach; ?>

        <h2>Ordenado Z-A:</h2>
        <?php foreach ($ordenadas_desc as $cat): ?>
            <?= $cat ?><br>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>