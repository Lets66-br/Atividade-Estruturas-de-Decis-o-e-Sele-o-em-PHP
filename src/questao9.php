<?php
$temperatura = (float) readline("Digite a temperatura em °C: ");

if ($temperatura < 15.0) {
    $classificacao = "Frio";
} elseif ($temperatura <= 25.0) {
    $classificacao = "Agradável";
} elseif ($temperatura <= 35.0) {
    $classificacao = "Quente";
} else {
    $classificacao = "Muito Quente";
}

echo "Temperatura: " . number_format($temperatura, 1, ',', '') . "°C - Classificação: $classificacao\n";
?>