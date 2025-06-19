<?php
// Variáveis com dados para login no db
define("DB_HOST", "db");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "teste");

// Validar erros em logs se preciso
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
} catch (mysqli_sql_exception $e) {
    die("Erro na conexão" . $e->getMessage());
}
?>