<?php

    if(isset($_POST)){
        
        extract($_POST);
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco']; 
        $cidade = $_POST['cidade'];
        $celular = $_POST['celular'];
        
        
        echo($nome);
    }

    else echo 'oi';
?>
