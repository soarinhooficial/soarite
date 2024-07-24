<?php
include_once 'globals.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include __DIR__ . DS . '/elements/head.php'; ?>
</head>

<body id="page-top">

    <header>
        <?php include __DIR__ . DS . '/elements/header.php'; ?>
    </header>
    <main id="contentPage" class="d-flex flex-column min-vh-100">

        <?php
        $uri = isset($_SERVER['REQUEST_URI']) ? trim($_SERVER['REQUEST_URI'], '/') : 'inicio';

        $uri = strtok($uri, '?');

        $uri = str_replace('governodigital.angra.rj.gov.br/', '', $uri);
        $uri = ltrim($uri, '/');

        if ($uri == '') {
            $uri = 'inicio';
        }

        $pages = [
            'inicio' => __DIR__ . DS . '/pages/home.php',
            'egd' => __DIR__ . DS . '/pages/egd.php',
            'ceti' => __DIR__ . DS . '/pages/ceti.php',
            'servicos-digitais' => __DIR__ . DS . '/pages/servicos-digitais.php',
            'processo-eletronico' => __DIR__ . DS . '/pages/processo-eletronico.php',
            'forum-de-transformacao-digital' => __DIR__ . DS . '/pages/forum-de-transformacao-digital.php',
            'boletim' => __DIR__ . DS . '/pages/boletim.php',
            'contato' => __DIR__ . DS . '/pages/contato.php',
        ];

        // Incluir a página correta ou a página de erro 404
        if (array_key_exists($uri, $pages)) {
            include $pages[$uri];
        } else {
            include __DIR__ . DS . '/pages/erro404.php';
        }
        ?>

    </main>
    <footer>
        <?php include __DIR__ . DS . '/elements/footer.php'; ?>
    </footer>
</body>

</html>