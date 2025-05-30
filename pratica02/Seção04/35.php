<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function MediaAluno($n1, $n2) {
    return ($n1 + $n2) / 2;
}
$n1 = 7;
$n2 = 7;

$MediaFinal = MediaAluno($n1, $n2);
echo "Media final: " . $MediaFinal;
    ?>
</body>
</html>