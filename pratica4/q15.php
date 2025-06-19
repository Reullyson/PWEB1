<?php
$registrosTreino = [
    ["João", [20, 30, 25]],
    ["Maria", [15, 18, 20]],
    ["Carlos", [40, 35, 38]]
];

foreach ($registrosTreino as $aluno) {
    $nome = $aluno[0];
    $melhor = max($aluno[1]);
    echo "$nome - Melhor resultado: $melhor<br>";
}
?>