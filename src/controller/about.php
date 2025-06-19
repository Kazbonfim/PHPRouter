<?php

    require_once __DIR__ . '/../config/db.php';
    require_once __DIR__ . '/../models/cadastro.php';

    $msgSucesso = "";
    $msgErro = "";

// Tratando envio dos dados pelo formulário presente no HTML
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // recebe os campos, e os limpa antes de enviar
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefone = trim($_POST['telefone'] ?? '');

    if ($nome && $email && $telefone) {
        if (salvarCadastro($conn, $nome, $email, $telefone)) {
            $msgSucesso = "Dados foram salvos com sucesso!";
        } else {
            $msgErro = "Houve um erro ao tentar salvar seus dados!";
        }
    } else {
        $msgErro = "Por favor, preencha todos os campos!";
    }
}
?>