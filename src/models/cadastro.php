<?php
function salvarCadastro($conn, $nome, $email, $telefone) {
    try {
        // Statement, sentenças
        $stmt = $conn -> prepare("INSERT INTO cadastros (nome, email, telefone) VALUES (?, ?, ?)");
        $stmt -> bind_param("sss", $nome, $email, $telefone);
        $stmt -> execute();
        return true;
    } catch (mysqli_sql_exception $e) {
        echo "Erro ao salvar dados: " . $e -> getMessage();
        return false;
    }
}
?>