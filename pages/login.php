<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // Verificar se o usuário existe e a senha está correta
    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        redirect('dashboard.php');
    } else {
        $error = "Usuário ou senha inválidos";
    }
}
?>

<!-- Formulário de Login -->
<form action="login.php" method="POST">
    <div class="form-group">
        <label for="username">Usuário</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
</form>
