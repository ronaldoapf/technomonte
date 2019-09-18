<?php

include '../model/Inscricao.php';
include '../model/Atividade.php';
include '../model/Pagamento.php';

    if(isset($_GET)){
    
        $cpf = $_GET['cpf'];
        $ano = '2019';
    
        $verificarInscrito = new Inscricao();
        $atividade = new Atividade();
        
        $retorno = $verificarInscrito->verificarInscricao($cpf);
        
        if($retorno == 'error') {
            echo json_encode($retorno);
            
        }

        else {
            $return = $atividade->buscarAtividades();
            $data = new stdClass();
            $data->atividades = $return;
            $data->inscrito = $retorno;
            echo json_encode($data);
        }

        /*if($retorno != 'error' && $return !== 'error') {
            $data = new stdClass();
            $data->atividades = $return;
            $data->inscrito = $retorno;
            echo json_encode($data);
        }

        else return 'error';*/
    }

?>