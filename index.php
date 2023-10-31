<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Loghy - Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images/favicon.svg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100" id="page-top">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php
                include 'div/nav.php'
            ?>
            <!-- Header-->
            <header class="bg-dark intro">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-10 col-xxl-8">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Jogador, Aspirante a desenvolvedor, e por incrível que pareça, Samurai.</h1>
                                <p class="lead fw-normal text-white-50 text-center mb-4">Mas como ser um Samurai encaixa nesta história?</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-center">
                                    <a class="btn btn-outline-light btn-lg px-4" href="about.php">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Blog preview section-->
                <section class="py-5">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="text-center">
                                    <h2 class="fw-bolder">Projetos em Andamento e Outros</h2>
                                    <p class="lead fw-normal text-muted mb-5">Pequenos projetos em andamento, como jogos, ou vídeos sobre momentos memoráveis em jogatinas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="col-lg-4 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <img class="card-img-top" src="images/bw4.jpg" alt="..." />
                                    <div class="card-body p-4">
                                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Artes Marciais</div>
                                        <a class="text-decoration-none link-dark stretched-link" href="about-niten.php"><h5 class="card-title mb-3">Se tornando um Samurai</h5></a>
                                        <p class="card-text mb-0">Uma breve introdução ao Instituto Niten e o que é o Kobudo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <img class="card-img-top" src="images/puzzling.jpg" alt="..." />
                                    <div class="card-body p-4">
                                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Jogo</div>
                                        <a class="text-decoration-none link-dark stretched-link" href="portfolio-puzzling.php"><h5 class="card-title mb-3">Puzzling</h5></a>
                                        <p class="card-text mb-0">Um jogo de puzzle, inicialmente um projeto para faculdade, e agora com potencial para se tornar um Party Game.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <img class="card-img-top" src="images/forza1.jpg" alt="..." />
                                    <div class="card-body p-4">
                                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Vídeo</div>
                                        <a class="text-decoration-none link-dark stretched-link" href="portfolio-sportsmanship.php"><h5 class="card-title mb-3">Forza Horizon 5 - Espírito Esportivo</h5></a>
                                        <p class="card-text mb-0">Um vídeo sobre como subjugar aqueles que não possuem espírito esportivo em uma corrida(Em edição).</p>
                                </div>
                            </div>
                        </div>                   
                    </div>
                </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Guilherme Melo dos Santos - 2023</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
