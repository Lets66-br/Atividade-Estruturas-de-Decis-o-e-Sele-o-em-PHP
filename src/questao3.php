<?php
$nota = (float) readline("Digite a nota do aluno: ");
$situacao = "reprovado";

if ($nota < 4.0) {
    $situacao = "reprovado";
} elseif ($nota >= 6.0) {
    $situacao = "aprovado";
} elseif ($nota >= 5.0) {
    $situacao = "recuperação";
} else {
    $situacao = "reprovado";
}

echo "Nota: $nota. Situação: $situacao\n";
