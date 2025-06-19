<?php
function ehPrimo($n) {
    if ($n <= 1) return false;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$numerosSorteados = [];
for ($i = 0; $i < 10; $i++) {
    $numerosSorteados[] = rand(1, 60);
}

$primos = 0;
foreach ($numerosSorteados as $num) {
    if (ehPrimo($num)) $primos++;
}

echo "Números sorteados: " . implode(", ", $numerosSorteados) . "<br>";
echo "Quantidade de números primos: $primos";
?>