<?php
$taxa = 5.00;
$preco_por_km = 2.50;

$distancia_km = (float) readline("Digite a distância percorrida em km: ");

$valor_corrida = $taxa + ($preco_por_km * $distancia_km);

echo "O valor total da corrida é: R$ " . number_format($valor_corrida, 2, ',', '.');