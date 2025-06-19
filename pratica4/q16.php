<?php
$caracteresPermitidos = ['a', 'b', 'c', '1', '2', '3', '!', '@', '#'];
$stringBase = implode("", $caracteresPermitidos);
echo "Base para senhas: $stringBase";
?>