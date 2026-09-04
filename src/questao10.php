<?php
echo "=== CÓDIGOS DE STATUS DO PEDIDO ===\n";
echo "1 - Aguardando Pagamento\n";
echo "2 - Em Separação\n";
echo "3 - Pedido Enviado\n";
echo "4 - Pedido Entregue\n";
$codigo_status = (int) readline("Digite o código do status: ");

switch ($codigo_status) {
    case 1:
        $status_pedido = "Aguardando Pagamento";
        break;
    case 2:
        $status_pedido = "Em Separação";
        break;
    case 3:
        $status_pedido = "Pedido Enviado";
        break;
    case 4:
        $status_pedido = "Pedido Entregue";
        break;
    default:
        $status_pedido = "Código de status inválido";
}

echo "Status atual: $status_pedido\n";
?>