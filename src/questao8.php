<?php
$usuario_cadastrado = "admin";
$senha_cadastrada = "12345";

$usuario_informado = readline("Digite o usuário: ");
$senha_informada = readline("Digite a senha: ");

if ($usuario_informado === $usuario_cadastrado && $senha_informada === $senha_cadastrada) {
    echo "Login realizado com sucesso! Bem-vindo ao sistema.\n";
} else {
    echo "Acesso negado: Usuário ou senha incorretos.\n";
}
?>