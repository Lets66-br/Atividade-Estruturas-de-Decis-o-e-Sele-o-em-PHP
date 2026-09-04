<?php
$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");
$operacao = readline("Digite a operação (+, -, *, /): ");

switch ($operacao) {
    case '+':
        $resultado = $num1 + $num2;
        echo "Resultado: " . number_format($resultado, 2, ',', '.') . "\n";
        break;
    case '-':
        $resultado = $num1 - $num2;
        echo "Resultado: " . number_format($resultado, 2, ',', '.') . "\n";
        break;
    case '*':
        $resultado = $num1 * $num2;
        echo "Resultado: " . number_format($resultado, 2, ',', '.') . "\n";
        break;
    case '/':
        if ($num2 == 0) {
            echo "Erro: Divisão por zero não é permitida!\n";
        } else {
            $resultado = $num1 / $num2;
            echo "Resultado: " . number_format($resultado, 2, ',', '.') . "\n";
        }
        break;
    default:
        echo "Operação inválida!\n";
}
?>