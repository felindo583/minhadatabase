<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meu banco</title>
</head>
<body>
<h1>Gerenciamento de Usuários</h1>
    <form action="store.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Telefone</label>
        <input type="Telefone" name="telefone" required>
        <input type="submit" value="Adicionar Usuário">
    </form>
    <hr>

    <h2>Lista de Usuários</h2>
    
    <div>
        <?php include 'read.php'; ?>
    </div>
</body>
</html>