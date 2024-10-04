<?php
ob_start();
session_start();
include_once __DIR__ . '/globals.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include __DIR__ . '/elements/head.php'; ?>
</head>

<header>
    <?php include __DIR__ . '/elements/header.php'; ?>
</header>

<body>
    <main id="contentPage" class="d-flex flex-column min-vh-100">
        <?php
        // Obtém o valor do parâmetro url da query string
        $uri = isset($_GET['url']) ? $_GET['url'] : 'inicio';

        // Definindo um array com os caminhos dos arquivos de conteúdo
        $pages = [
            'inicio' => __DIR__ . '/pages/home.php',
            'servicos' => __DIR__ . '/pages/services.php',
            'portfolio' => __DIR__ . '/pages/portfolio.php',
            'curriculo' => __DIR__ . '/pages/curriculum.php',
            'artes' => __DIR__ . '/pages/arts.php',
            'blog' => __DIR__ . '/pages/blog.php',
            'orcamento' => __DIR__ . '/pages/budget.php',
            'sobre' => __DIR__ . '/pages/about.php',
            'social' => __DIR__ . '/pages/social.php',
            'contato' => __DIR__ . '/pages/contact.php',
            'ler' => __DIR__ . '/pages/read.php',
            'adicionar' => __DIR__ . '/pages/create.php',
            'editar' => __DIR__ . '/pages/edit.php',
            'deletar' => __DIR__ . '/pages/delete.php',
            'usuario' => __DIR__ . '/pages/user.php'
        ];

        // Verificando se a página solicitada existe no array
        if (array_key_exists($uri, $pages)) {
            include $pages[$uri];
        } else {
            include __DIR__ . '/pages/erro404.php';
        }
        ?>

    </main>
    <footer>
        <?php include __DIR__ . '/elements/footer.php'; ?>
    </footer>
</body>

</html>

<?php
ob_end_flush(); // Envia a saída para o navegador
?>