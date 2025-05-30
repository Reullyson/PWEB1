<?php
function calcularMedia($notas) {
    $total = array_sum($notas);
    $quantidade = count($notas);
    return $quantidade ? $total / $quantidade : 0;
}

function formatarPreco($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}