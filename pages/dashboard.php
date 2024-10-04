<?php
checkLogin();

// Selecionar todos os posts
$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
?>

<h2>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h2>
<a href="add_post.php" class="btn btn-success">Adicionar Novo Post</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Título</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['title']; ?></td>
            <td>
                <a href="edit_post.php?id=<?php echo $post['id']; ?>" class="btn btn-warning">Editar</a>
                <a href="delete_post.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
