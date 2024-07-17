<?php

// Verifica se o ID do post foi fornecido via GET
if (!isset($_GET['id'])) {
    header('Location: dashboard.php');
    exit;
}

$postId = $_GET['id'];

// Verifica se o formulário foi submetido para atualização do post
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Prepara e executa a consulta SQL para atualizar o post
    $sql = "UPDATE posts SET title = ?, content = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $title, $content, $postId);

    if ($stmt->execute()) {
        $stmt->close();
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Erro ao atualizar o post: " . $conn->error;
    }
}

// Busca os dados do post para preencher o formulário de edição
$sql = "SELECT * FROM posts WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $postId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $title = htmlspecialchars($row['title']); // Escapa o título para exibir como texto simples
    $content = htmlspecialchars($row['content']); // Escapa o conteúdo para exibir como texto simples
} else {
    echo "Post não encontrado.";
    exit;
}

$stmt->close();
?>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Editar Post</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $postId; ?>" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Conteúdo</label>
                    <textarea class="form-control" id="content" name="content" rows="6" required><?php echo $content; ?></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Atualizar Post</button>
            </form>
        </div>
    </div>
</main>