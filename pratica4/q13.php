<?php
$despesasMensais = [1200.50, 850.75, 1500.00, 920.30, 1100.20];
$media = array_sum($despesasMensais) / count($despesasMensais);
echo "Média de despesas: R$ " . number_format($media, 2);
?>