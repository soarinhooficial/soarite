<?php

include_once 'functions.php';

?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Dashboard</h2>

            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        <div class="col-md-9">
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <h2>Lista de Posts</h2>
                <a href="add_post.php" class="btn btn-success">Adicionar Novo Post</a>
            </div>
            <?php managePosts(); ?>
        </div>
    </div>

</main>