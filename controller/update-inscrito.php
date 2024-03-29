<?php
    require_once('../model/Inscricao.php');
    require_once('../model/Atividade_inscricao.php');
    require_once('../model/Atividade.php');
    require_once('../model/Pagamento.php');

   
    if(isset($_POST) && isset($_POST['d'])){
        new DateTime("now", new DateTimeZone('America/Sao_Paulo'));
        $dataPagto = date("Y-m-d H:i:s");

        session_start();
        $nomeUsuario = $_SESSION['user'];
        
        $ano = '2019';
        $presente = 'N';
        $form = $_POST['d'];
        
        $nome = $form['nome'];
        $cpf = $form['cpf'];
        $estado = $form['estado'];
        $email = $form['email'];
        $endereco = $form['endereco']; 
        $cidade = $form['cidade'];
        $celular = $form['celular'];
        $maratona = $form['maratona'];
        $minicurso = $form['minicurso'];
        $workshops = $form['workshops'];
        $instituicao = $form['instituicao'];
        $valor = $form['valor'];
        $tamanhoCamiseta = $form['camiseta'];

        //Deletando as atividades
        $deleteAtividade = new Atividade_inscricao();
        $retorno = $deleteAtividade->deletarAtividades($cpf, $ano);

        //Update da inscrição
        $update = new Inscricao();
        $returno = $update->updateInscricao($nome, $cpf, $estado, $email, $endereco, $cidade, $celular, $instituicao, $ano, $tamanhoCamiseta);

        //Inserir atividades_inscricao
        $insertAtividades = new Atividade_inscricao();
        $retorno = $insertAtividades->salvarAtividades($minicurso, $maratona, $workshops, $cpf, $ano, $presente);

        $insertPagamento = new Pagamento();
        $notificado = 0;

        $retorno = $insertPagamento->inserirPagamento($dataPagto, $valor, $nomeUsuario, $notificado, $cpf, $ano);
    }
?>
