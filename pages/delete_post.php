<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $postId = $_GET['id'];

    // Prepara e executa a consulta SQL para excluir o post
    $sql = "DELETE FROM posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $postId);
    $stmt->execute();
    $stmt->close();

    // Redireciona de volta para a página de gerenciamento de posts
    header('Location: dashboard.php');
    exit;
}
?>
