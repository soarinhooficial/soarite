<?php
checkLogin();

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
$stmt->execute([$id]);

redirect('dashboard.php');
?>
