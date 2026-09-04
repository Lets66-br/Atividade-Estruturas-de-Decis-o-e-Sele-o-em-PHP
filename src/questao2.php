<?php
$idade = (int) readline("Digite a sua idade: ");

if ($idade < 12) {
    $classificado = "Criança";
} elseif ($idade < 18) {
    $classificado = "Adolescente";
} elseif ($idade < 60) {
    $classificado = "Adulto";
} else {
    $classificado = "Idoso";
}

echo "Idade: $idade anos. Classificado: $classificado\n";   
