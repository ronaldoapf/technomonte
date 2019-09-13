<?php

    include '../model/Inscricao.php';
    if($_POST){
        
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
        $ano = filter_input(INPUT_POST, "ano", FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, "estado", FILTER_SANITIZE_STRING);
        $celular = filter_input(INPUT_POST, "celular", FILTER_SANITIZE_STRING);
        $whatsapp = filter_input(INPUT_POST, "whatsapp", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING);
        $estudante = filter_input(INPUT_POST, "estudante", FILTER_SANITIZE_STRING);
        $instituicao = filter_input(INPUT_POST, "instituicao", FILTER_SANITIZE_STRING);

        $credenciamento = 'N';

        // $cpf, $ano, $nome, $endereco, $cidade, $estado, $celular, $whatsapp, $email, $data, $estudante, $instituicao, $credenciamento
        
        $novaInscricao = new Inscricao($cpf, $ano, $nome, $endereco, $cidade, $estado, $celular, $whatsapp, $email, $data, $estudante, $instituicao, $credenciamento);
        
    }
?>