<!DOCTYPE html>
<html>

<head>
    <title>INSCRIÇÕES - TECHNOMONTE 2K19</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/img/technomonte/logo_ico.ico"> <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="../assets/scripts/css/bootstrap.min.css"> <!-- CSS Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../assets/scripts/css/style.css">
    <script src="https://kit.fontawesome.com/9bbf1f9f22.js"></script> <!-- Font Awesome -->
    <script src="../assets/scripts/js/jquery.min.js"></script> <!-- Jquery -->
    <script src="../assets/scripts/js/bootstrap.min.js"></script> <!-- JS Bootstrap -->
    <script src="../assets/scripts/js/popper.min.js"></script> <!-- Popper -->
    <script src="../assets/scripts/js/jquery.mask.min.js"></script>
    <script src="../assets/scripts/js/main.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-blue">
        <a class="navbar-brand" href="../index.php">
            <img src="../assets/img/technomonte/logoFundoEscuro.png" width="48" height="35" alt="Logo TECHNOMONTE">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="technomonte2k19.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Evento
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="technomonte2k19.php">Atividades previstas</a>
                        <a class="dropdown-item" href="organizacao.php">Organização</a>
                        <!--<a class="dropdown-item" href="#">Patrocínio</a>-->
                        <a class="dropdown-item" href="submissao.php">Submissão de Trabalhos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link ativo" href="inscricao.php">Inscrição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="programacao.php">Programação</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>


    <div class="page">
        <div class="container">
            <div class="page-title">
                <h2>
                    <center>Inscrição</center>
                </h2>
            </div>
        </div>
    </div>

    <div class="">

        <div class="row">
            <div class="col-12 text-center">
                <h1>AGUARDE! MAIS INFORMAÇÕES EM BREVE!</h1>
            </div>
        </div>

        <!--
        <form class="form-inscricao" action="../controller/novo-cadastro.php" method="POST">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="Nome">Nome:</label>
                        <input class="form-control" type="text" placeholder="Seu nome" name="nome">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="CPF">CPF:</label>
                        <input class="form-control mask-cpf" type="text" placeholder="000.000.000-00" name="cpf">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="Nome">Email:</label>
                        <input class="form-control" type="email" placeholder="seuemail@email.com" name="email">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="Cidade">Cidade:</label>
                        <input class="form-control" type="text" placeholder="Insira sua cidade" name="cidade">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="Estado">Estado</label>
                        <select class="form-control" type="select" name="estado">
                            <option value="" disabled="" selected="">Escolha seu estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <label>Estudante?</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioEstudante" value="Sim" checked>
                        <label class="form-check-label" for="exampleRadios1">Sim</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioEstudante" value="Não">
                        <label class="form-check-label" for="exampleRadios2">Não</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="Celular">Celular:</label>
                        <input class="form-control mask-telefone" type="text" placeholder="(##) # ####-####"
                            name="celular">
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100">Se inscrever!</button>
                </div>

            </div>
        </form>
		
		-->
    </div>

    <br><br>

    <div class="container" style="margin-bottom:20px;">
        <div class="row">
            <div class="col-6 text-center">
                <h5>Realização:</h5>
                <img src="../assets/img/technomonte/realizacao.png" width="70%">
            </div>

            <div class="col-6 text-center">
                <h5>Apoio:</h5>
                <img src="../assets/img/technomonte/apoio.png" width="90%">
            </div>
        </div>
    </div>

    <div class="patrocinadores">
        <div class="row">
            <div class="col-12">
                <center><h3>Patrocinadores:</h3></center>
            </div>
            <div class="col-12">
                <center><h5>Visite nossos patrocinadores:</h5></center>
            </div>
            <div class="col-2">
                <a target="_blank" href="https://www.alliancemonte.com"><img src="../assets/img/patrocinadores/alliance.png" alt=""></a>
            </div>
            <div class="col-2">
                <a target="_blank" href="https://www.criartgrafica.com.br"><img src="../assets/img/patrocinadores/criart.png" alt=""></a>
            </div>

            <div class="col-2">
                <img src="../assets/img/patrocinadores/monteccer.png" alt="">
            </div>

            <div class="col-2">
            <img src="../assets/img/patrocinadores/ortodontic.png" alt="">
            </div>

            <div class="col-2">
                <a target="_blank" href="https://www.sygmasistemas.com.br"><img src="../assets/img/patrocinadores/sygma.png" alt=""></a>
            </div>
            <div class="col-2">
                <img src="../assets/img/patrocinadores/posto_santarita.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="text">
            <h3>CONTATOS</h3><br><br>
            <p>
                Endereços:

                <br>
                <br>

                UFU CAMPUS MONTE CARMELO - <a
                    href="https://www.google.com.br/maps/place/UFU+-+Unidade+Araras/@-18.7238275,-47.5262734,17z/data=!3m1!4b1!4m5!3m4!1s0x94a588cdb71f3513:0x49e70536bad58c20!8m2!3d-18.7238275!4d-47.5240847"
                    target="“_blank”"> km 1, LMG-746, Monte Carmelo - MG</a>

                <br>
                UNIFUCAMP - <a
                    href="https://www.google.com.br/maps/place/Fucamp+-+Monte+Carmelo/@-18.7376963,-47.5151771,15z/data=!4m5!3m4!1s0x0:0xa035303f8b80ff8d!8m2!3d-18.7376963!4d-47.5151771"
                    target="“_blank”">Av. Brasil Oeste, s/n - Jardim Zenith II, Monte Carmelo - MG</a>

                <br>
                Email:<a href="mailto:contato@technomonte.com.br" target="_top"> contato@technomonte.com.br</a>
            </p>

            <div class="footer-redes-sociais">
                <a href="https://www.facebook.com/technomonte" class="fab fa-facebook" target="_blank"> </a>

                <a href="https://www.instagram.com/technomonte/" class="fab fa-instagram" target="_blank"></a>

                <a href="https://twitter.com/technomonte" class="fab fa-twitter-square" target="_blank"> </a>
            </div>
        </div>
    </div>


</body>

</html>