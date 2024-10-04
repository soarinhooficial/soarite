<?php
// Inicia a sessão se ainda não estiver iniciada
session_start();

// Encerra a sessão
session_unset();
session_destroy();

// Redireciona para a página de destino após logout
header('Location: ../');
exit;
?>
