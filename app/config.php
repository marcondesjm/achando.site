<?php
// Configuração do Banco de Dados - Hostinger
define('DB_HOST', 'localhost');
define('DB_USER', 'uXXX_banco'); // Substitua pelo usuário real
define('DB_PASS', 'sua_senha_aqui'); // Substitua pela senha real
define('DB_NAME', 'uXXX_banco'); // Substitua pelo nome real do banco

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    error_log("Erro de conexão com o banco de dados: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'Erro interno do servidor']);
    exit;
}
?>