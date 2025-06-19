<?php
$especiesObservadas = ["Beija-flor", "Canário", "Bem-te-vi", "Sabiá", "Beija-flor", "Coruja"];

if (in_array("Pardal", $especiesObservadas)) {
    echo "A espécie 'Pardal' já foi registrada.<br>";
} else {
    echo "A espécie 'Pardal' ainda não foi registrada.<br>";
}

$unicas = array_unique($especiesObservadas);
echo "Espécies únicas: " . implode(", ", $unicas);
?>