<?php
$filaAtendimento = ['João Silva', 'Maria Santos', 'Pedro Costa'];
array_unshift($filaAtendimento, "Ana Oliveira");
array_push($filaAtendimento, "Luiz Fernandes");
echo "Fila atual: " . implode(", ", $filaAtendimento);
?>