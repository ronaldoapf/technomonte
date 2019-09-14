<?php

    include '../model/Atividade.php';

    if(isset($_GET)){
        $atividade = new Atividade();

        $return = $atividade->buscarAtividades();
        echo json_encode($return);
    }

?>