<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Loghy - Lista de Exercícios PHP</title>
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
                                    <h2 class="fw-bolder">Lista de Exercícios PHP</h2>
                                    <p class="lead fw-normal text-muted mb-5"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 1</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Feito, falta ajuste no footer.</div>
                                            <p class="card-text mb-0">Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                            Insira o Primeiro Número: 
                                            <input type="number" name="aa" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            Insira o Segundo Número: <input type="number" name="ab" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                            @$aa = $_GET['aa'];
                                            @$ab = $_GET['ab'];
                                            @$Aresultadoum = $aa + $ab;
                                            if ($Aresultadoum > 20)
                                            {
                                                $Aresultadodois = $Aresultadoum + 8;
                                            }
                                            elseif ($Aresultadoum <= 20)
                                            {
                                                $Aresultadodois = $Aresultadoum - 5;
                                            }
                                            print "Valor do primeiro cálculo:" .$Aresultadoum;
                                            print "<br>Valor do segundo cálculo:".$Aresultadodois; 
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 2</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Feito, falta ajuste no footer.</div>
                                            <p class="card-text mb-0">Ler três números inteiros, a partir de um formulário, e imprimir na tela qual o maior e menor valor fornecido.</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                                Insira o primeiro número: <input type="number" name="Ba" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                Insira o segundo número: <input type="number" name="Bb" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                Insira o terceiro número: <input type="number" name="Bc" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                            $Ba = @$_REQUEST['Ba'];
                                            $Bb = @$_REQUEST['Bb'];
                                            $Bc = @$_REQUEST['Bc'];
                                            if ($Ba > $Bb && $Bc < $Bb)
                                            {
                                                print "Maior número:" .$Ba;
                                                print "<br>Menor número:" .$Bc;
                                            }
                                            elseif ($Ba > $Bc && $Bb < $Bc)
                                            {
                                                print "Maior número: " .$Ba;
                                                print "<br>Menor número: " .$Bb;
                                            }
                                            elseif ($Bb > $Ba && $Bc < $Ba)
                                            {
                                                print "Maior número: " .$Bb;
                                                print "<br>Menor número: " .$Bc;
                                            }
                                            elseif ($Bb > $Bc && $Ba < $Bc)
                                            {
                                                print "Maior número: " .$Bb;
                                                print "<br>Menor número: " .$Ba;
                                            }
                                            elseif ($Bc > $Ba && $Bb < $Ba)
                                            {
                                                print "Maior número: " .$Bc;
                                                print "<br>Menor número: " .$Bb;
                                            }
                                            elseif ($Bc > $Bb && $Ba < $Bb)
                                            {
                                                print "Maior número: " .$Bc;
                                                print "<br>Menor número: " .$Ba;
                                            }
                                            elseif ($Ba == $Bb && $Bc < $Bb)
                                            {
                                                print "Maior número: " .$Ba;
                                                print "<br>Menor número: " .$Bc;
                                            }
                                            elseif ($Ba == $Bc && $Bb < $Bc)
                                            {
                                                print "Maior número: " .$Ba;
                                                print "<br>Menor número: " .$Bb;
                                            }
                                            elseif ($Bb == $Ba && $Bc < $Ba)
                                            {
                                                print "Maior número: " .$Bb;
                                                print "<br>Menor número: " .$Bc;
                                            }
                                            elseif ($Bb == $Bc && $Ba < $Bc)
                                            {
                                                print "Maior número: " .$Bb;
                                                print "<br>Menor número: " .$Ba;
                                            }
                                            elseif ($Bc == $Ba && $Bb < $Ba)
                                            {
                                                print "Maior número: " .$Bc;
                                                print "<br>Menor número: " .$Bb;
                                            }
                                            elseif ($Bc == $Bb && $Ba < $Bb)
                                            {
                                                print "Maior número:" .$Bc;
                                                print "Menor número:" .$Ba;
                                            }

                                            elseif ($Ba == $Bb && $Bc > $Bb)
                                            {
                                                print "Maior número: " .$Bc;
                                                print "<br>Menor número: " .$Ba;
                                            }
                                            elseif ($Ba == $Bc && $Bb > $Bc)
                                            {
                                                print "Maior número: " .$Bb;
                                                print "<br>Menor número: " .$Ba;
                                            }
                                            elseif ($Bb == $Ba && $Bc > $Ba)
                                            {
                                                print "Maior número: " .$Bc;
                                                print "<br>Menor número: " .$Bb;
                                            }
                                            elseif ($Bb == $Bc && $Ba > $Bc)
                                            {
                                                print "Maior número: " .$Ba;
                                                print "<br>Menor número: " .$Bb;
                                            }
                                            elseif ($Bc == $Ba && $Bb <> $Ba)
                                            {
                                                print "Maior número: " .$Bb;
                                                print "<br>Menor número: " .$Bc;
                                            }
                                            elseif ($Bc == $Bb && $Ba > $Bb)
                                            {
                                                print "Maior número:" .$Ba;
                                                print "Menor número:" .$Bc;
                                            }
                                            elseif ($Ba == $Bb && $Bb == $Bc && $Ba == $Bc)
                                            {
                                                print "Os três números dados são iguais.";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0" id="ex03">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 3</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Feito, falta ajuste no footer.</div>
                                            <p class="card-text mb-0">Crie um script php que receba um número, a partir de um formulário e gere a tabuada completa de multiplicação deste número.</p>
                                    </div>
                                    <div class="card-body p-4">
                                       <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                                Insira o número a ser multiplicado: <input type="number" name="Ca" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form> 
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                            @$Ca = @$_REQUEST['Ca'];
                                            @$tabuadas = array(1,2,3,4,5,6,7,8,9,10);
                                       //     foreach($tabuadas as &$tabuada)
                                       //     {
                                       //         $tabuadad = $tabuada * $Ca;
                                       //         print $tabuadad." ";
                                       //     }
                                            for ($i=1; $i <= 10; $i++) 
                                            { 
                                                $tabuada = $i * $Ca;
                                                print "[".$i."x$Ca] = $tabuada <br>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 4</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Não Feito</div>
                                            <p class="card-text mb-0">Crie um script em PHP que receba pela URL do navegador 3 valores numéricos e os rmazene nas variáveis $a, $b e $c. Em seguida, calcule e escreva o valor da expressão ($a - $b) * $c;</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                            Insira o primeiro númerô: <input type="text" name="Da" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            Insira o segundo número: <input type="text" name="Db" class="form-control">
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
                                            <div class="badge bg-primary bg-gradient mb-2">Não Feito</div>
                                            <p class="card-text mb-0">Maria quer viajar até a casa de sua irmã, de carro, e gostaria de saber, antecipadamente, quantos litros de gasolina irá gastar e qual o valor que terá de desembolsar pelo combustível gasto na viagem. Faça um script em PHP que receba via formulário:<br> 
                                            a. A distância da casa de Maria até a casa de sua irmã, em km;<br>
                                            b. O consumo de seu carro, em km/litro;<br>
                                            c. O preço da gasolina no posto onde Maria abastece.<br>
                                            Em seguida, mostre para Maria o valor que a mesma gastará com combustível na viagem e quantos litros o carro consumirá;</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
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
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 6</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Não Feito</div>
                                            <p class="card-text mb-0">Calcular a quantidade de dinheiro gasta por um fumante. Dados: o número de anos que ele fuma, o nº de cigarros fumados por dia e o preço de uma carteira.</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
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
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 7</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Não Feito</div>
                                            <p class="card-text mb-0">Escreva uma função que recebe, por parâmetro, o número de linhas, colunas e um conteúdo (texto) qualquer. Que serão utilizados para criar uma tabela HTML com essas características.</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
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
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 8</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Não Feito</div>
                                            <p class="card-text mb-0">Criar uma função para calcular o imposto de renda dos contribuintes, considerando
                                            que os dados de cada contribuinte, número de CPF, número de dependentes e renda
                                            mensal são valores fornecidos pelo usuário. Para cada contribuinte será feito um
                                            desconto de 5% do salário mínimo por dependente. 
                                            Os valores para cálculo do imposto são: <br>
                                            <table class="table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Renda Líquida</th>
                                                        <th scope="col"> Alíquota</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Até 3 salários mínimos </th>
                                                        <th> Isento</th>
                                                    </tr>
                                                    <tr>
                                                        <th>3 salários mínimos </th>
                                                        <th> 7%</th>
                                                    </tr>
                                                    <tr>
                                                        <th>4 salários mínimos </th>
                                                        <th> 15%</th>
                                                    </tr>
                                                    <tr>
                                                        <th>5 salários mínimos </th>
                                                        <th> 22%</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Acima de 6 salários mínimos </th>
                                                        <th> 27%</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                            Insira o CPF(Somente números): <input type="text" name="Ha" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            Insira o valor da renda mensal: <input type="number" name="Hb" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            Insira o número de dependentes: <input type="number" name="Hc" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                            @$Ha = @$_REQUEST['Ha'];
                                            @$Hb = @$_REQUEST['Hb'];
                                            @$Hc = @$_REQUEST['Hc'];
                                            @$Hacon = strlen($Ha);
                                            if ($Hb < 3960)
                                            {

                                            }
                                            if ($Hb < 3960)
                                            {
                                                
                                            }
                                            if ($Hb < 3960)
                                            {
                                                
                                            }
                                            if ($Hb < 3960)
                                            {
                                                
                                            }
                                            if ($Hb < 3960)
                                            {
                                                
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 9</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Feito, falta ajuste no footer.</div>
                                            <p class="card-text mb-0">Faça um programa que receba 2 números e efetue as quatro operações de acordo com a escolha do usuário (soma, subtrair, multiplicar ou dividir);</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                            Primeiro Número: <input type="text" name="Ia" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            Segundo número: <input type="text" name="Ib" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                Selecione a operação a ser feita:
                                                <select name="Ic" id="Ic" class="form-select">
                                                    <option value="adicao">Adição</option>
                                                    <option value="subtracao">Subtração</option>
                                                    <option value="multi">Multiplicação</option>
                                                    <option value="divis">Divisão</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                            $Ia = @$_REQUEST['Ia'];
                                            $Ib = @$_REQUEST['Ib'];
                                            $Ic = @$_REQUEST['Ic'];
                                            $Id = 0;
                                            if ($Ic == "adicao")
                                            {
                                                $Id = $Ia + $Ib;
                                                print "O resultado é: ".$Id;
                                            }
                                            elseif ($Ic == "subtracao")
                                            {
                                                $Id = $Ia - $Ib;
                                                print "O resultado é: ".$Id;
                                            }
                                            elseif ($Ic == "multi")
                                            {
                                                $Id = $Ia * $Ib;
                                                print "O resultado é: ".$Id;
                                            }
                                            elseif ($Ic == "divis")
                                            {
                                                $Id = $Ia / $Ib;
                                                print "O resultado é: ".$Id;
                                            }

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 10</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Não Feito</div>
                                            <p class="card-text mb-0">10. Faça um programa que o usuário coloca uma data e ele indique qual a estação do ano a data refere-se (primavera, verão, outono ou inverno).</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="5a" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 11</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Não Feito</div>
                                            <p class="card-text mb-0">Faça um programa que o usuário entre com um número e ele informa se é par ou ímpar.</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="5a" class="form-control">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 12</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Não Feito</div>
                                            <p class="card-text mb-0">Faça um programa que receba uma letra e informe se é vogal ou consoante.</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="5a" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-header">
                                            <h5 class="card-title mb-3">Exercício 13</h5>
                                            <div class="badge bg-primary bg-gradient mb-2">Feito, falta ajuste no footer</div>
                                            <p class="card-text mb-0">Faça um programa que entre com um número de 1 a 12 e ele informa o mês correspondente.</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="revis.php" method="GET">
                                            <div class="mb-3">
                                            A <input type="text" name="ka" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                        switch (@$_REQUEST['ka']) 
                                        {
                                            case 1:
                                                print "O mês correspondente é Janeiro";
                                                break;
                                            case 2:
                                                print "O mês correspondente é Fevereiro";
                                                break;
                                            case 3:
                                                print "O mês correspondente é Março";
                                                break;
                                            case 4:
                                                print "O mês correspondente é Abril";
                                                break;
                                            case 5:
                                                print "O mês correspondente é Maio"; 
                                                break;
                                            case 6:
                                                print "O mês correspondente é Junho";
                                                break;
                                            case 7:
                                                print "O mês correspondente é Julho";
                                                break;
                                            case 8:
                                                print "O mês correspondente é Agosto";
                                                break;
                                            case 9:
                                                print "O mês correspondente é Setembro";
                                                break;
                                            case 10:
                                                print "O mês correspondente é Outubro";
                                                break;
                                            case 11:
                                                print "O mês correspondente é Novembro";
                                                break;
                                            case 12:
                                                print "O mês correspondente é Dezembro";
                                                break;
                                        }
                                        ?>
                                    </div>
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
