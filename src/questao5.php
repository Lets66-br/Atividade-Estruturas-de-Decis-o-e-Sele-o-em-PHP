<?php 
echo "1 - Setor Financeiro\n";
echo "2 - Suporte Técnico\n";
echo "3 - Cancelar serviço\n";
$opcao = (int) readline("Escolha uma opção (1-3): ");

switch ($opcao) {
    case 1:
        echo "Você escolheu o Setor Financeiro.\n";
        break;
    case 2: 
        echo "Você escolheu o Suporte Técnico.\n";
        break;
    case 3: 
        echo "Você escolheu Cancelar serviço.\n";
        break;
    default:
        echo "Opção inválida.\n";
}