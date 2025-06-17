<?php
function isPrimo($num) {
    if ($num <= 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;
    
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$numerosSorteados = [];
$primos = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($i = 0; $i < 10; $i++) {
        $numerosSorteados[] = rand(1, 60);
    }
    
    foreach ($numerosSorteados as $numero) {
        if (isPrimo($numero)) {
            $primos++;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Números Aleatórios e Primos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .section { margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px; }
        button { padding: 8px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .primo { color: green; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Números Aleatórios e Primos</h1>
    
    <div class="section">
        <form method="post">
            <p>Clique no botão para gerar 10 números aleatórios entre 1 e 60 e verificar quantos são primos.</p>
            <button type="submit">Gerar Números</button>
        </form>
    </div>
    
    <?php if (!empty($numerosSorteados)): ?>
        <div class="section">
            <h2>Resultados</h2>
            <p>Total de números primos encontrados: <strong><?= $primos ?></strong></p>
            
            <table>
                <tr>
                    <th>Número</th>
                    <th>É primo?</th>
                </tr>
                <?php foreach ($numerosSorteados as $numero): ?>
                    <tr>
                        <td><?= $numero ?></td>
                        <td class="<?= isPrimo($numero) ? 'primo' : '' ?>">
                            <?= isPrimo($numero) ? 'Sim' : 'Não' ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</body>
</html>