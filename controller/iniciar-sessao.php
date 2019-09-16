<?php

    include '../model/Usuario.php';

    if(isset($_POST)){

        $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

        $iniciarSessao = new Usuario();
        
        $retorno = $iniciarSessao->verificarUsuarioExistente($usuario, $senha);

        if($retorno == 1) {
            session_start();
            $_SESSION['user'] = $retorno;
            echo'
            <script type="text/javascript">
                alert("Login efetuado com sucesso!");
                window.location="../view/index-admin.php";
            </script>  
        ';
        }

    }

?>