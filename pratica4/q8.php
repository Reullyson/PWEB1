<?php
$cartas = ["Ás de Espadas", "Rei de Copas", "Dama de Ouros", "Valete de Paus", "10 de Espadas"];

echo "Antes do embaralhamento: " . implode(", ", $cartas) . "<br>";
shuffle($cartas);
echo "Depois do embaralhamento: " . implode(", ", $cartas);
?>