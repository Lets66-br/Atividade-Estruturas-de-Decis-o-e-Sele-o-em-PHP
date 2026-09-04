<?php
$valor_compra = (float) readline("Digite o valor da compra: R$ ");

if ($valor_compra >= 500.00) {
    $desconto = 0.20; // 20%
} elseif ($valor_compra >= 200.00) {
    $desconto = 0.10; // 10%
} else {
    $desconto = 0.05; // 5%
}

$valor_desconto = $valor_compra * $desconto;
$valor_final = $valor_compra - $valor_desconto;

echo "Valor original: R$ " . number_format($valor_compra, 2, ',', '.') . "\n";
echo "Desconto aplicado: R$ " . number_format($valor_desconto, 2, ',', '.') . "\n";
echo "Valor final com desconto: R$ " . number_format($valor_final, 2, ',', '.') . "\n";
?>