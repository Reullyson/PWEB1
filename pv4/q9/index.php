<?php
if ($_POST) {
    $idsA = array();
    $idsB = array();
    
    for ($i = 1; $i <= 3; $i++) {
        if (!empty($_POST['idA'.$i])) {
            $idsA[] = $_POST['idA'.$i];
        }
        if (!empty($_POST['idB'.$i])) {
            $idsB[] = $_POST['idB'.$i];
        }
    }
    
    $todosIds = $idsA;
    foreach ($idsB as $id) {
        if (!in_array($id, $todosIds)) {
            $todosIds[] = $id;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Combinar IDs</title>
</head>
<body>
    <h1>Combinar IDs sem Duplicatas</h1>
    <form method="post">
        <h3>Fonte A:</h3>
        ID 1: <input type="number" name="idA1"><br>
        ID 2: <input type="number" name="idA2"><br>
        ID 3: <input type="number" name="idA3"><br>
        
        <h3>Fonte B:</h3>
        ID 1: <input type="number" name="idB1"><br>
        ID 2: <input type="number" name="idB2"><br>
        ID 3: <input type="number" name="idB3"><br>
        
        <input type="submit" value="Combinar">
    </form>

    <?php if ($_POST): ?>
        <h2>IDs Fonte A:</h2>
        <?php foreach ($idsA as $id): ?>
            <?= $id ?><br>
        <?php endforeach; ?>

        <h2>IDs Fonte B:</h2>
        <?php foreach ($idsB as $id): ?>
            <?= $id ?><br>
        <?php endforeach; ?>

        <h2>Todos IDs (sem duplicatas):</h2>
        <?php foreach ($todosIds as $id): ?>
            <?= $id ?><br>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>