<?php
$boletim = [
    "Português" => 8.0,
    "Matemática" => 6.5,
    "História" => 7.2,
    "Geografia" => 5.0
];

foreach ($boletim as $disciplina => $nota) {
    $status = $nota >= 7 ? "Aprovado" : "Reprovado";
    echo "$disciplina: $nota - $status<br>";
}
?>