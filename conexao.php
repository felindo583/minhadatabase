<?php
// Defina as variáveis de conexão
$servidor = "localhost";  // Geralmente localhost
$usuario = "root";        // Usuário do banco de dados
$senha = "";              // Senha do banco de dados
$nome_banco = "exercicio"; // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servidor, $usuario, $senha, $nome_banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Caso a conexão seja bem-sucedida
echo "Conectado ao banco de dados com sucesso!";
?>
