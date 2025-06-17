<?php
if ($_POST) {
    $participantes = array();
    for ($i = 1; $i <= 6; $i++) {
        if (!empty($_POST['participante'.$i])) {
            $participantes[] = $_POST['participante'.$i];
        }
    }
    
    $unicos = array();
    foreach ($participantes as $nome) {
        $encontrado = false;
        foreach ($unicos as $unico) {
            if ($unico == $nome) {
                $encontrado = true;
                break;
            }
        }
        if (!$encontrado) {
            $unicos[] = $nome;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Participantes Únicos</title>
</head>
<body>
    <h1>Lista de Participantes Únicos</h1>
    <form method="post">
        Participante 1: <input type="text" name="participante1"><br>
        Participante 2: <input type="text" name="participante2"><br>
        Participante 3: <input type="text" name="participante3"><br>
        Participante 4: <input type="text" name="participante4"><br>
        Participante 5: <input type="text" name="participante5"><br>
        Participante 6: <input type="text" name="participante6"><br>
        <input type="submit" value="Processar">
    </form>

    <?php if ($_POST): ?>
        <h2>Lista Original:</h2>
        <?php foreach ($participantes as $nome): ?>
            <?= $nome ?><br>
        <?php endforeach; ?>

        <h2>Participantes Únicos:</h2>
        <?php foreach ($unicos as $nome): ?>
            <?= $nome ?><br>
        <?php endforeach; ?>
    <?php endif; ?>
</