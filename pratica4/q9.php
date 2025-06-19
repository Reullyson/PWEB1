<?php
$idsFonteA = [101, 105, 102];
$idsFonteB = [103, 101, 106];

$todosIds = array_unique(array_merge($idsFonteA, $idsFonteB));
echo "IDs combinados e únicos: " . implode(", ", $todosIds);
?>