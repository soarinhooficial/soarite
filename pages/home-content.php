<section id="hero-section" class="position-relative overflow-hidden min-vh-100">
    <!-- Background video -->
    <video autoplay muted loop class="position-absolute w-100 h-100" style="object-fit: cover;">
        <source src="<?php echo PATH; ?>assets/video/hero.mp4" type="video/mp4">
        Seu navegador não suporta o vídeo.
    </video>
    <div class="position-absolute w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4);"></div>
    <!-- <div class="container h-100 d-flex justify-content-center align-items-center position-relative">
        <div class="text-white text-center">
            <h1 class="mb-3">Título de Exemplo</h1>
            <h4 class="mb-3">Exemplo de Slogan</h4>
            <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="https://soarinho.com/social" role="button">Conecte-se agora</a>
        </div>
    </div> -->
</section>


<section id="skills" class="py-5 ">


    <div class="container">

        <div class="row justify-content-center align-items-center g-2">

            <h1 class="my-4">Habilidades</h1>

            <div class="col"><img src="<?php echo PATH; ?>assets/icon/cello.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/canto.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/locucao.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/producao.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/edicao.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/design.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/suporte.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/frontend.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/analise.svg" class="img-fluid" alt="..."></div>

        </div>
        <hr>
        <div class="row justify-content-center align-items-center g-2">

            <h1 class="my-4 text-end">Tecnologias</h1>

            <div class="col"> <img src="<?php echo PATH; ?>assets/icon/html.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/css.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/bootstrap.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/js.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/php.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/mysql.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/git.svg" class="img-fluid" alt="..."></div>
            <div class="col"><img src="<?php echo PATH; ?>assets/icon/github.svg" class="img-fluid" alt="..."></div>
            <!-- <div class="col"><img src="<?php echo PATH; ?>assets/icon/redes.svg" class="img-fluid" alt="..."></div> -->

        </div>

    </div>

</section>

<?php
include ROOT_PATH . 'components/banner2-home.php';
?>

<section class="bg-black">
    <div class="container-full">
        <div class="row d-flex py-5 justify-content-center align-items-center">
            <div class="col-4 m-2">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active rounded-5">
                            <img src="https://dummyimage.com/1800x1200/dbdbdb/787878.png&text=Image+cap" class="rounded-5 d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://dummyimage.com/1800x1200/dbdbdb/787878.png&text=Image+cap" class="rounded-5 d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://dummyimage.com/1800x1200/dbdbdb/787878.png&text=Image+cap" class="rounded-5 d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-6 text-white">

                <p class="fs-5">Mergulhe no mundo da criatividade com minhas soluções artísticas. Da música ao vivo à produção audiovisual, transformo ideias em experiências impactantes.</p>

            </div>
        </div>
        <div class="row py-5 text-white justify-content-center align-items-center g-2">
            <div class="col-6 text-white">

                <p class="fs-5">Exploro a fronteira da inovação tecnológica para fornecer soluções de ponta. De desenvolvimento web à manutenção de computadores, garanto eficiência e qualidade em cada projeto.</p>

            </div>
            <div class="col-4 m-2">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://dummyimage.com/1800x1200/dbdbdb/787878.png&text=Image+cap" class="rounded-5 d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://dummyimage.com/1800x1200/dbdbdb/787878.png&text=Image+cap" class="rounded-5 d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://dummyimage.com/1800x1200/dbdbdb/787878.png&text=Image+cap" class="rounded-5 d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include ROOT_PATH . 'components/banner1-home.php';
?>

<section id="">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, libero placeat asperiores labore minima officia error architecto non optio commodi ullam ipsum praesentium, fuga mollitia maiores autem, eaque reprehenderit!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, libero placeat asperiores labore minima officia error architecto non optio commodi ullam ipsum praesentium, fuga mollitia maiores autem, eaque reprehenderit!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, libero placeat asperiores labore minima officia error architecto non optio commodi ullam ipsum praesentium, fuga mollitia maiores autem, eaque reprehenderit!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, libero placeat asperiores labore minima officia error architecto non optio commodi ullam ipsum praesentium, fuga mollitia maiores autem, eaque reprehenderit!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, libero placeat asperiores labore minima officia error architecto non optio commodi ullam ipsum praesentium, fuga mollitia maiores autem, eaque reprehenderit!</p>
</section>