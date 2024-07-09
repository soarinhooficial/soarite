// config.php
<?php
define('ROOT_PATH', realpath(dirname(__FILE__)) . '/');
define('PATH', '/soarite/');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'elements/head.php'; ?>
</head>

<body>
    <header>
        <?php include 'elements/header.php'; ?>
    </header>
    <main id="contentPage" class="d-flex pt-5 flex-column min-vh-100">
        <?php
        // Obtém o valor do parâmetro url da query string
        $uri = isset($_GET['url']) ? $_GET['url'] : 'inicio';

        // Definindo um array com os caminhos dos arquivos de conteúdo
        $pages = [
            'inicio' => 'pages/home-content.php',
            'servicos' => 'pages/services-content.php',
            'portfolio' => 'pages/portfolio-content.php',
            'orcamento' => 'pages/budget-content.php',
            'shows' => 'pages/shows-content.php',
            'sobre' => 'pages/about-content.php',
            'social' => 'pages/social-content.php'
        ];

        // Verificando se a página solicitada existe no array
        if (array_key_exists($uri, $pages)) {
            include $pages[$uri];
        } else {
            include 'pages/error404.php';
        }
        ?>
    </main>
    <footer>
        <?php include 'elements/footer.php'; ?>
    </footer>
</body>

</html>