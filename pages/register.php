<?php
require 'globals.php'; // Importa a conexão com o banco de dados
$errors = [];
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e valida os dados do formulário
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $passwordConfirm = trim($_POST['password_confirm']);

    // Verifica se os campos estão preenchidos
    if (empty($username) || empty($password) || empty($passwordConfirm)) {
        $errors[] = 'Todos os campos são obrigatórios.';
    }

    // Verifica se as senhas coincidem
    if ($password !== $passwordConfirm) {
        $errors[] = 'As senhas não coincidem.';
    }

    // Verifica se o nome de usuário já existe
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->rowCount() > 0) {
        $errors[] = 'O nome de usuário já está em uso.';
    }

    // Se não houver erros, insere o usuário no banco de dados
    if (empty($errors)) {
        // Criptografa a senha
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insere o usuário no banco de dados
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        if ($stmt->execute([$username, $hashedPassword])) {
            // Redireciona para a página de login após cadastro bem-sucedido
            header("Location: index.php?url=login");
            exit;
        } else {
            $errors[] = 'Erro ao cadastrar usuário. Tente novamente.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Cadastro de Usuário</h2>

    <!-- Exibe mensagens de sucesso ou erro -->
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="alert alert-success">
            <?php echo $success; ?>
        </div>
    <?php endif; ?>

    <!-- Formulário de Cadastro -->
    <form action="index.php?url=registre-se" method="POST">
        <div class="form-group">
            <label for="username">Nome de Usuário</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirm">Confirmar Senha</label>
            <input type="password" name="password_confirm" id="password_confirm" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
    </form>
</div>
</body>
</html>
