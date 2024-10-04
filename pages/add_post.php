<?php
checkLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imagePath = null;

    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        $imageName = time() . '-' . basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $imageName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array(strtolower($fileType), ['jpg', 'jpeg', 'png', 'gif'])) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
                $imagePath = $targetFilePath;
            }
        }
    }

    $stmt = $pdo->prepare('INSERT INTO posts (title, content, image) VALUES (?, ?, ?)');
    $stmt->execute([$title, $content, $imagePath]);
    redirect('dashboard.php');
}
?>

<form action="add_post.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="content">Conteúdo</label>
        <textarea name="content" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Imagem</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar Post</button>
</form>
