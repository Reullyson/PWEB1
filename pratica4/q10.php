<?php
$listaParticipantes = ["Carlos", "Ana", "João", "Maria", "João", "Pedro", "Maria", "Ana"];

$participantesUnicos = array_unique($listaParticipantes);
echo "Participantes únicos: " . implode(", ", $participantesUnicos);
?>