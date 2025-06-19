<?php
$livros = ["Dom Casmurro", "O Alquimista", "1984", "Harry Potter"];

$livros[] = "A Revolução dos Bichos"; // novo lote
unset($livros[2]); // remove "1984"
$livros = array_values($livros); // reorganiza índices

foreach ($livros as $livro) {
    echo "$livro<br>";
}
?>