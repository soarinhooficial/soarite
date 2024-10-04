<?php
checkLogin();

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imagePath = $post['image'];

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

    $stmt = $pdo->prepare("UPDATE posts SET title = ?, content = ?, image = ? WHERE id = ?");
    $stmt->execute([$title, $content, $imagePath, $id]);
    redirect('dashboard.php');
}
?>

<form action="edit_post.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>" required>
    </div>
    <div class="form-group">
        <label for="content">Conteúdo</label>
        <textarea name="content" class="form-control" required><?php echo $post['content']; ?></textarea
