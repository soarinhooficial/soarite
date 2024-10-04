<?php

require_once 'actions/post.php';

$users = readUserAction($conn);

?>
<div class="container">

    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?= htmlspecialchars($post['image']) ?>" class="card-img-top" alt="Imagem do Post">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($post['titulo']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($post['texto']) ?></p>
                        <a href="<?= htmlspecialchars($post['id']) ?>" class="btn btn-dark">Visualizar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>