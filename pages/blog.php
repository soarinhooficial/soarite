<?php

include_once 'functions.php';
// Inclui o arquivo de configuração

// Função para listar os posts
?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <h2>Lista de Posts</h2>
            </div>
            <?php listPosts(); ?>
        </div>
    </div>
</main>