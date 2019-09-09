<?php
    
    require_once('../model/Pessoa.php');
    //$nome, $cpf, $email, $cidade, $estado, $celular;

    if($_POST){

        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, "estado", FILTER_SANITIZE_STRING);
        $celular = filter_input(INPUT_POST, "celular", FILTER_SANITIZE_STRING);
        
        $novaPessoa = new Pessoa($nome, $cpf, $email, $cidade, $estado, $celular);
        echo $novaPessoa->cadastrarPessoa();    
    }
?>