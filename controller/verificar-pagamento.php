<?php

    include '../model/Pagamento.php';
    if(isset($_GET)){

        $cpf = $_GET['cpf'];
        $ano = '2019';

        $verificarPagamento = new Pagamento();
        $result = $verificarPagamento->verificarExistePagamentoRealizado($cpf, $ano);
        
        if($result == 'Pagamento realizado') echo json_encode($result);

        else return 'tudo certo';


    }
?>