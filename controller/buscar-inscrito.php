<?php

include '../model/Inscricao.php';
include '../model/Atividade.php';

    if(isset($_GET)){

        //agora como eu vou usar isso lá?
        // rapadura é doce mas ne mole n

        
        $cpf = $_GET['cpf'];
    
        $verificarInscrito = new Inscricao();
        $atividade = new Atividade();

        $return = $atividade->buscarAtividades();
        $retorno = $verificarInscrito->verificarIscricao($cpf);

        if($retorno != 'error' && $return !== 'error') {
            $data = new stdClass();
            $data->atividades = $return;
            $data->inscrito = $retorno;
            echo json_encode($data);
        }
    }

?>