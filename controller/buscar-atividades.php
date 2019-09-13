<?php

    include '../model/Atividade.php';

    if($_POST){
        $atividade = new Atividade();

        $return = $atividade->buscarAtividades();

        echo json_encode($return);
    }

?>