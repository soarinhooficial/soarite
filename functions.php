<?php

function managePosts()
{
    global $conn;

    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                    <p class="card-text"><?= htmlspecialchars($row['content']) ?></p>
                    <p class="card-text"><small class="text-muted">Criado em: <?= htmlspecialchars($row['created_at']) ?></small></p>
                    <a href="edit_post.php?id=<?= $row['id'] ?>" class="btn btn-primary">Editar</a>
                    <a href="delete_post.php?id=<?= $row['id'] ?>" class="btn btn-danger ml-2">Excluir</a>
                </div>

            </div>
        <?php
        }
    } else {
        echo 'Nenhum post encontrado.';
    }
}

function listPosts()
{
    global $conn;

    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                    <p class="card-text"><?= htmlspecialchars($row['content']) ?></p>
                    <p class="card-text"><small class="text-muted">Criado em: <?= htmlspecialchars($row['created_at']) ?></small></p>
                </div>
            </div>
<?php
        }
    } else {
        echo 'Nenhum post encontrado.';
    }
}

?>