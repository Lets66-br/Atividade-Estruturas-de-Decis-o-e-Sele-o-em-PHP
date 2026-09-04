<?php
$subtotal = (float) readline("Digite o valor do subtotal da compra: R$ ");

if ($subtotal >= 200.00) {
    $frete = 0.00; // Frete Grátis
} elseif ($subtotal >= 100.00) {
    $frete = 15.00;
} else {
    $frete = 30.00;
}

$total_compra = $subtotal + $frete;

echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "\n";
echo "Frete: R$ " . number_format($frete, 2, ',', '.') . "\n";
echo "Total da Compra: R$ " . number_format($total_compra, 2, ',', '.') . "\n";
?>
