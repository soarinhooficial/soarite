<?php
session_start();
include_once __DIR__ . '/globals.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include __DIR__ . '/elements/head.php'; ?>
</head>

<body id="page-top">
    <header>
        <?php include __DIR__ . '/elements/header.php'; ?>
    </header>
    <main id="contentPage" class="d-flex flex-column min-vh-100">

        <?php
        // Obtém o valor do parâmetro url da query string
        $uri = isset($_GET['url']) ? $_GET['url'] : 'inicio';

        // Definindo um array com os caminhos dos arquivos de conteúdo
        $pages = [
            'inicio' => __DIR__ . '/pages/home.php',
            'egd' => __DIR__ . '/pages/egd.php',
            'ceti' => __DIR__ . '/pages/ceti.php',
            'servicos-digitais' => __DIR__ . '/pages/servicos-digitais.php',
            'processo-eletronico' => __DIR__ . '/pages/processo-eletronico.php',
            'forum-de-transformacao-digital' => __DIR__ . '/pages/forum-de-transformacao-digital.php',
            'boletim' => __DIR__ . '/pages/boletim.php',
            'contato' => __DIR__ . '/pages/contato.php',
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
