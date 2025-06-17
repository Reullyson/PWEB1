<?php
if ($_POST) {
    $cartas = array();
    for ($i = 1; $i <= 5; $i++) {
        if (!empty($_POST['carta'.$i])) {
            $cartas[] = $_POST['carta'.$i];
        }
    }
    
    $embaralhadas = $cartas;
    for ($i = count($embaralhadas) - 1; $i > 0; $i--) {
        $j = rand(0, $i);
        $temp = $embaralhadas[$i];
        $embaralhadas[$i] = $embaralhadas[$j];
        $embaralhadas[$j] = $temp;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Embaralhar Cartas</title>
</head>
<body>
    <h1>Embaralhar Cartas</h1>
    <form method="post">
        Carta 1: <input type="text" name="carta1"><br>
        Carta 2: <input type="text" name="carta2"><br>
        Carta 3: <input type="text" name="carta3"><br>
        Carta 4: <input type="text" name="carta4"><br>
        Carta 5: <input type="text" name="carta5"><br>
        <input type="submit" value="Embaralhar">
    </form>

    <?php if ($_POST && !empty($cartas)): ?>
        <h2>Cartas Originais:</h2>
        <?php foreach ($cartas as $carta): ?>
            <?= $carta ?><br>
        <?php endforeach; ?>

        <h2>Cartas Embaralhadas:</h2>
        <?php foreach ($embaralhadas as $carta): ?>
            <?= $carta ?><br>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>