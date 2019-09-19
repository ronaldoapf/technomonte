<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>INSCRIÇÕES - TECHNOMONTE 2K19</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/img/technomonte/logo_ico.ico"> <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="../assets/scripts/css/bootstrap.min.css"> <!-- CSS Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../assets/scripts/css/style.css">
    <script src="../assets/scripts/js/fontawesome.js"></script> <!-- Font Awesome -->
    <script src="../assets/scripts/js/jquery.min.js"></script> <!-- Jquery -->
    <script src="../assets/scripts/js/popper.min.js"></script> <!-- Popper -->
    <script src="../assets/scripts/js/bootstrap.min.js"></script> <!-- JS Bootstrap -->
    <script src="../assets/scripts/js/jquery.mask.min.js"></script>
    <script src="../assets/scripts/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147513386-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
        gtag('js', new Date());

        gtag('config', 'UA-147513386-1');
    </script>

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
                        <a class="dropdown-item" href="campeonato-jogos.php">Campeonato de Jogos</a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="technomonte2k19.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Edições Anteriores
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" target="_blank" href="https://www.technomonte.com.br/2018">2018</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>

    <div class="container">
        <h3 class="text-center" style="margin-bottom: 40px;">Tabela de valores</h3>

        <div class="table-inscricao">
            <div class="center">
                <table class="table">
                    <thead>
                        <tr BGCOLOR="#AAD931">
                            <th></th>
                            <th scope="col">Até o dia 26/09</th>
                            <th scope="col">Após o dia 26/09</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Estudantes</td>
                            <td>R$ 20,00</td>
                            <td>R$ 30,00</td>
                        </tr>
                        <tr>
                            <td>Não Estudante</td>
                            <td>R$ 30,00</td>
                            <td>R$ 40,00</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <h6><i>* As 100 primeiras inscrições pagas ganharão uma camiseta do evento. As camisetas serão entregues
                    somente no credenciamento.</i></h6>
            <h6><i>* A realização da inscrição não é garantia de vaga para os Minicursos, Workshops ou Campeonatos. As
                    vagas serão preenchidas por ordem de pagamento e os participantes receberão um e-mail de confirmação
                    na atividade.</i></h6>
            <h6><i>* A inscrição para os jogos está sendo realizada atráves de um formulário. Para mais informações, acesse a <a target="_blank" href="campeonato-jogos.php">página</a>.</i></h6>
        </div>
        <br>
        <h3 class="text-center" style="margin-bottom: 40px;">Locais e horários de pagamento</h3>

        <div class="container">
            <div class="text-left">
                O pagamento da inscrição poderá ser realizado de duas maneiras:<br>
                <ul>
                    <li><b>online</b> pelo site <a href="https://www.ingressolive.com/technomonte-2k19" target="_blank">
                            <u>Ingresso Live</u></a></li>
                    <li><b>pessoalmente</b> na UFU e na UNIFUCAMP a partir do dia 16/09/2019, nos locais e horários
                        abaixo:</li>
            </div>
            <br>
            <div class="table-inscricao">
                <div class="center">
                    <table class="table">
                        <thead>
                            <tr BGCOLOR="#AAD931">
                                <th>Locais</th>
                                <th scope="col">Dias</th>
                                <th scope="col">Horários</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>UFU Unidade Araras</b><br>Bloco 1AMC - 1º andar (do lado do elevador)</td>
                                <td>16/09 a 18/09</td>
                                <td>08h30 às 08h50; 10h40 às 11h00; 12h50 às 13h10; 14h50 às 15h10</td>
                            </tr>
                            <tr>
                                <td><b>UFU Unidade Araras</b><br>Bloco 1AMC - 1º andar (do lado do elevador)</td>
                                <td>23/09 a 27/09</td>
                                <td>08h30 às 08h50; 10h40 às 11h00; 12h50 às 13h10; 14h50 às 15h10</td>
                            </tr>
							<tr>
                                <td><b>UNIFUCAMP</b><br>Secretaria do Curso de Sistemas para Internet</td>
                                <td>16/09 a 27/09</td>
                                <td>18h30 às 22h</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="form-inscricao">
            <form name="formInscricao" action="../controller/nova-inscricao.php" method="POST" >
                <div class="row">

                    <div class="col-12 d-flex justify-content-center" style="margin-top: 40px; margin-bottom: 20px;">
                        <h3>Faça já a sua inscrição</h3>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Nome completo:</label>
                            <input class="form-control" type="text" name="nome" id="nome" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>CPF: <small>(Apenas números)</small></label>
                            <input class="form-control mask-cpf" type="text" name="cpf" id="cpf" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control" type="email" name="email" id="" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input class="form-control" type="text" name="endereco" id="" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Cidade:</label>
                            <input class="form-control" type="text" name="cidade" id="" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Estado:</label>
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
                                <option value="MG" selected>Minas Gerais</option>
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

                    <div class="col-6 col-sm-6">
                        <div class="form-group">
                            <label>Celular<small>(com DDD)</small>:</label>
                            <input class="form-control mask-telefone" type="text" name="celular" id="" required>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label>Este número possui WhatsApp?</label><br>
                            <input type="radio" name="whatsapp" value="S"> Sim<br>
                            <input type="radio" name="whatsapp" value="N"> Não<br>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label>Você é estudante?</label><br>
                            <input type="radio" name="estudante" value="S"> Sim<br>
                            <input type="radio" name="estudante" value="N"> Não<br>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label>Tamanho da camiseta:</label>
                            <select class="form-control" name="camiseta">
                                <option value="P">P</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="GG">GG</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Nome da instituição/empresa:</label>
                            <input class="form-control" type="text" name="instituicao" id="instituicao">
                        </div>
                    </div>

                    <!--<?php
                            include '../model/Atividade.php';

                            $atividade = new Atividade();

                            $return = $atividade->buscarAtividades();
                            echo json_encode($return);
                        ?>-->

                    <script>
                    $(document).ready(function() {
                        $.ajax({
                            type: 'GET',
                            url: '../controller/buscar-atividades.php',
                            success: function(dados) {
                                var contMinicursos = 0;
                                let innerHtml = '';
                                let treatedData = JSON.parse(dados);
                                const minicursos = treatedData.filter( d => d.tipo === 'Minicursos');
                                const maratonas = treatedData.filter( d => d.tipo === 'Maratona');
                                const workshops = treatedData.filter( d => d.tipo === 'Workshops');

                                const finalData = [
                                    {key: 'Minicursos', data: minicursos},
                                    {key: 'Maratona', data: maratonas},
                                    {key: 'Workshops', data: workshops}
                                ];

                                finalData.forEach( group => {
                                    const { key, data } = group;
                                    innerHtml += 
                                    `
                                    <div class="col-12" style="margin: 20px 0;>
                                        <ul class="list-group">
                                            <h4>${key}</h4>
                                    `;
                                    data.forEach(d => {
                                        const {codigo, nomeAtividade, vagasdisponiveis, tipo} = d;

                                        if(vagasdisponiveis > 0){
                                            console.log(contMinicursos);
                                            cont = 0;
                                            if(contMinicursos == 4 || contMinicursos == 6 || contMinicursos == 9){
                                                innerHtml += `
                                                    <li class="list-group-item">
                                                        <input type="radio" checked name="${tipo}" value="${codigo}" id="${codigo}"> ${nomeAtividade}
                                                    </li>
                                                `;    
                                            }

                                            else{

                                                innerHtml += `
                                                    <li class="list-group-item">
                                                        <input type="radio" name="${tipo}" value="${codigo}" id="${codigo}"> ${nomeAtividade}
                                                    </li>
                                                `;
                                            }
                                                contMinicursos++;
                                        }
                                    });
                                    innerHtml += 
                                    `
                                        </ul>
                                    </div>
                                    `;
                                });

                                $('#div-atividades').append(innerHtml);
                            }
                        });
                    });
                    </script>

                    <div id="div-atividades">
                       
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success w-100">Realizar inscrição</button>

                        <br><br>
                        <h6><i>* Você receberá uma confirmação da inscrição por e-mail após a confirmação do
                                pagamento.</i></h6>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div class="container" style="margin-top:60px; margin-bottom:20px;">
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
        <div class="row" style="margin-left: 0;">
            <div class="col-12">
                <center>
                    <h3>Patrocinadores:</h3>
                </center>
            </div>
            <div class="col-12">
                <center>
                    <h5>Visite nossos patrocinadores:</h5>
                </center>
            </div>
            <div class="col-md-3"></div>

            <div class="col-4 col-md-2 d-flex align-items-center">
                <a><img src="../assets/img/patrocinadores/posto_santarita.jpg" alt=""></a>
            </div>
            <div class="col-4 col-md-2 d-flex align-items-center text-center">
                <a target="_blank" href="https://www.alliancemonte.com"><img
                        src="../assets/img/patrocinadores/alliance.png" alt="" style="max-width: 80%;"></a>
            </div>

            <div class="col-4 col-md-2 d-flex align-items-center">
                <a target="_blank" href="https://www.sygmasistemas.com.br"><img
                        src="../assets/img/patrocinadores/sygma.png" alt=""></a>
            </div>
            

            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="patrocinadores">
        <div class="row" style="margin-left: 0;">
            <div class="col-md-3"></div>
            <div class="col-4 col-md-2 d-flex align-items-center text-center">
                <a><img src="../assets/img/patrocinadores/ortodontic.png" alt="" style="max-width: 80%;"></a>
            </div>

            <div class="col-4 col-md-2 d-flex align-items-center">
                <a><img src="../assets/img/patrocinadores/monteccer.png" alt=""></a>
            </div>
            <div class="col-4 col-md-2 d-flex align-items-center">
                <a target="_blank" href="https://www.criartgrafica.com.br"><img
                        src="../assets/img/patrocinadores/criart.png" alt=""></a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="patrocinadores">
        <div class="row" style="margin-left: 0;">
            <div class="col-md-3"></div>
            <div class="col-4 col-md-2 d-flex align-items-center">
                <a target="_blank" href="https://www.sicoobaracoop.com.br"><img
                        src="../assets/img/patrocinadores/aracoop.png" alt=""></a>
            </div>
            <div class="col-4 col-md-2 d-flex align-items-center text-center">
                <a><img src="../assets/img/patrocinadores/casiu.png" alt="" style="max-width: 90%;"></a>
            </div>
            <div class="col-4 col-md-2 d-flex align-items-center">
                <a></a>
            </div>
            <div class="col-md-3"></div>
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
