<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Loghy - Se Tornando um Samurai</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images/favicon.svg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php
                include 'div/nav.php'
            ?>
            <!-- Header-->
            <div class="exerciciobg">
                    <!-- About section one-->
                    <!-- Card Livros -->
                <section class="py-1">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="text-center">
                                    <h2 class="fw-bolder">Exercícios PHP</h2>
                                    <p class="lead fw-normal text-muted mb-5"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 1</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Adição</div>
                                            <p class="card-text mb-0">Soma de dois números</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            Primeiro Número <input type="number" name="a" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            Segundo Número <input type="number" name="b" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                            @$a = $_GET['a'];
                                            @$b = $_GET['b'];
                                            @$resultado = $a + $b;
                                            print $resultado;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 2</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Switch/Case</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.  </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 3</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Switch/Case</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.  </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="3a" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            B <input type="text" name="3b" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 4</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Switch/Case</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.  </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="4a" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            B <input type="text" name="4b" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 5</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Switch/Case</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.  </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="5a" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            B <input type="text" name="5b" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>                   
                        </div>

                </section>
                <section class="py-1">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="text-center">
                                    <h2 class="fw-bolder">Exercícios If/Else e Switch/Case</h2>
                                    <p class="lead fw-normal text-muted mb-5"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 1</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Adição</div>
                                            <p class="card-text mb-0">Soma de dois números</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            Primeiro Número <input type="number" name="a" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            Segundo Número <input type="number" name="b" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                            @$a = $_GET['a'];
                                            @$b = $_GET['b'];
                                            @$resultado = $a + $b;
                                            print $resultado;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 2</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Switch/Case</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.  </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            Insira a letra <input type="text" name="da" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                            @$da = $_GET['da'];
                                            strtoupper($da);
                                            @$das = substr($da, 0,1);
                                            print $das;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 3</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Switch/Case</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.  </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="3a" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            B <input type="text" name="3b" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 4</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Switch/Case</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.  </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="4a" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            B <input type="text" name="4b" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 5</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Switch/Case</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.  </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="exercicios.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="5a" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            B <input type="text" name="5b" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>                   
                        </div>
                </section>

            </div>

        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Guilherme Melo dos Santos - 2023</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="contact.html">Contact</a>
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
