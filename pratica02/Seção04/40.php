<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function registrarLogEvento($mensagem) {
    $dataHora = date("Y-m-d H:i:s", time());

    $linhaLog = "[$dataHora] - $mensagem" . PHP_EOL;

    echo $linhaLog;

    $arquivoLog = "eventos.log";

    file_put_contents($arquivoLog, $linhaLog, FILE_APPEND);
}
registrarLogEvento("Usuário fez login");
registrarLogEvento("Erro ao carregar página");

?>
    
</body>
</html>