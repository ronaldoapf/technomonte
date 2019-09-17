<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        Header('Location: login.php');
    }
?>


<!DOCTYPE html>
<html>

<head>
    <title>ADMINISTRADOR - TECHNOMONTE 2K19</title>
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
                    <a class="nav-link" href="inscricao.php">Inscrição</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="../controller/encerrar-sessao.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="div-pagamento">
        <div class="row">
            <div class="col-12">
                <h4 style="padding: 40px 0;">Pagamento</h4>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>CPF:</label>
                    <input class="form-control mask-cpf" type="text" id="cpf" name="cpf" value="" required>
                </div>
            </div>

            <div class="col-12" style="margin-bottom: 40px;">
                <button id="buttonClick" class="btn btn-primary w-100">Buscar</button>
            </div>


        </div>

    </div>

    <script>
    $cpf = $("#cpf").val();

    function habilitaInputs() {
        $(".enable").prop("disabled", false);
        $('.mask-telefone').mask("00000000000");
        $('.mask-cpf').mask("00000000000");
    }

    function concluirAtualizacao() {
        nome = $("#nome").val();

        var obj = new Object();

        obj.nome = $("#nome").val();
        obj.cpf = $("#cpf").val();
        obj.email = $("#email").val();
        obj.endereco = $("#endereco").val();
        obj.cidade = $("#cidade").val();
        obj.estado = $("#estado").val();
        obj.celular = $("#celular").val();
        obj.minicurso = $("#minicurso").val();
        obj.workshops = $("#workshops").val();
        obj.maratona = $("#maratona").val();
        obj.instituicao = $("#instituicao").val();
        obj.valor = $("#valor").val();


        $.ajax({
            type: 'POST',
            url: '../controller/update-inscrito.php',
            data: {
                d: obj
            },

            success: function(dados) {
                console.log(dados);

                if (dados == 1111) {
                    alert("Mudanças alteradas e pagamento efetuado com sucesso!");
                    window.location="../view/index-admin.php";
                }
                $(".enable").prop("disabled", true);
            }
        });

    }

    $(document).ready(function() {
        $("#buttonClick").click(function() {
            $(".atualizar-dados").empty();
            cpf = $('#cpf').val();

            getAtividades = (atividades) => {
                str = '';
                atividades.filter(at => at.tipo === 'Minicursos').forEach(at => {
                    str += `      
                            <option class="enable" id="enable" name="${at.tipo}" value="${at.codigo}" id="${at.codigo}" disabled="true">${at.nomeAtividade}</option>
                        `;
                });
                return str;
            }
            getMaratonas = (atividades) => {
                str = '';
                atividades.filter(at => at.tipo === 'Maratona').forEach(at => {
                    str += `      
                            <option class="enable" name="${at.tipo}" value="${at.codigo}" id="${at.codigo}" disabled="true">${at.nomeAtividade}</option>
                        `;
                });
                return str;
            }

            getWorkshops = (atividades) => {
                str = '';
                atividades.filter(at => at.tipo === 'Workshops').forEach(at => {
                    str += `      
                            <option class="enable" name="${at.tipo}" value="${at.codigo}" id="${at.codigo}" disabled="true">${at.nomeAtividade}</option>
                        `;
                });
                return str;
            }

            $.ajax({
                type: 'GET',
                url: '../controller/buscar-inscrito.php',
                data: {
                    cpf
                },
                success: function(dados) {
                    if (dados === 'error') return;

                    dados = JSON.parse(dados);
                    const {
                        atividades,
                        inscrito
                    } = dados;

                    $("#atualizar-dados").append(
                        `
                            
                            <div class="row">
                                    <div class="col-12">
                                        <button id="atualizar" class="btn btn-primary" onclick="habilitaInputs()">Atualizar</button>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input name="nome" type="text" class="form-control enable" value="${inscrito[0].nome}" id="nome" disabled="true">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>CPF:</label>
                                            <input type="text" class="mask-cpf form-control enable" value="${inscrito[0].cpf}" id="cpf" disabled="true">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" class="form-control enable" value="${inscrito[0].email}" id="email" disabled="true">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Endereço:</label>
                                            <input type="text" class="form-control enable" value="${inscrito[0].endereco}" id="endereco" disabled="true">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Cidade:</label>
                                            <input type="text" class="form-control enable" value="${inscrito[0].cidade}" id="cidade" disabled="true">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Estado:</label>
                                            <input type="text" class="form-control enable" value="${inscrito[0].estado}" id="estado" disabled="true">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Celular:</label>
                                            <input type="text" class="mask-telefone form-control enable" value="${inscrito[0].celular}" id="celular" disabled="true">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Nome da instituição/empresa:</label>
                                            <input type="text" class="form-control enable" value="${inscrito[0].instituicao}" id="instituicao" disabled="true">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Minicurso escolhido:<strong> ${inscrito[0].nomeAtividade}</strong>.</label>
                                            <select class="form-control enable" id="minicurso">
                                                ${getAtividades(atividades)}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Maratona escolhido: <strong>${inscrito[1].nomeAtividade}</strong></label>
                                            <select class="form-control enable" id="maratona">
                                                ${getMaratonas(atividades)}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Workshop escolhido: <strong>${inscrito[2].nomeAtividade}</strong></label>
                                            <select class="form-control enable" id="workshops">
                                                ${getWorkshops(atividades)}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <h4 style="text-center">Pagamento</h4>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Valor:</label>
                                            <input class="form-control" type="text" id="valor">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary enable w-100" disabled="true" onclick="concluirAtualizacao()" id="concluir-atualizacao">Concluir</button>
                                        </div>
                                    </div>
                                </div>
                            `
                    );
                }
            });
        });
    });
    </script>



    <div class="atualizar-dados" id="atualizar-dados">
    </div>

    <div class="concluir-pagamento">

    </div>

    <div class="patrocinadores">
        <div class="row" style="margin-left: 0;">
            <div class="col-12">
                <center><h3>Patrocinadores:</h3></center>
            </div>
            <div class="col-12">
                <center><h5>Visite nossos patrocinadores:</h5></center>
            </div>
			<div class="col-md-3"></div>
			
			<div class="col-4 col-md-2 d-flex align-items-center">
                <a><img src="../assets/img/patrocinadores/posto_santarita.jpg" alt=""></a>
            </div>
			<div class="col-4 col-md-2 d-flex align-items-center text-center">
                <a target="_blank" href="https://www.alliancemonte.com"><img src="../assets/img/patrocinadores/alliance.png" alt="" style="max-width: 80%;"></a>
			</div>
            <div class="col-4 col-md-2 d-flex align-items-center">
				<a target="_blank" href="https://www.sygmasistemas.com.br"><img src="../assets/img/patrocinadores/sygma.png" alt=""></a>
			</div>
			<div class="col-md-3"></div>
        </div>
	</div>
	<div class="patrocinadores">
		<div class="row" style="margin-left: 0;">
			<div class="col-md-3"></div>
			<div class="col-4 col-md-2 d-flex align-items-center text-center">
				<a><img src="../assets/img/patrocinadores/ortodontic.png" alt=""></a>
			</div>
			<div class="col-4 col-md-2 d-flex align-items-center">
                <a><img src="../assets/img/patrocinadores/monteccer.png" alt=""></a>
            </div>
			<div class="col-4 col-md-2 d-flex align-items-center">
                <a target="_blank" href="https://www.criartgrafica.com.br"><img src="../assets/img/patrocinadores/criart.png" alt=""></a>
			</div>
			<div class="col-md-3"></div>
		</div>
    </div>
	<div class="patrocinadores">
		<div class="row" style="margin-left: 0;">
			<div class="col-md-3"></div>
			<div class="col-4 col-md-2 d-flex align-items-center">
				<a target="_blank" href="https://www.sicoobaracoop.com.br"><img src="../assets/img/patrocinadores/aracoop.png" alt=""></a>
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