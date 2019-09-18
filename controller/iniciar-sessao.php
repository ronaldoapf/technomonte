<?php

    include '../model/Usuario.php';

    if(isset($_POST)){

        $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

        $iniciarSessao = new Usuario();
        
        $retorno = $iniciarSessao->verificarUsuarioExistente($usuario, $senha);

        if($retorno != 'error') {
           echo'
            <script type="text/javascript">
                alert("Login efetuado com sucesso!");
                window.location="../view/index-admin.php";
            </script>  
        ';
        
            session_start();
            $_SESSION['user'] = json_encode($retorno);
            $json = json_decode($_SESSION['user']);
            foreach($json as $usuario){
                $nome = $usuario->usuario;
            }
            $_SESSION['user'] = $nome;
        }

       else echo '
        <script type="text/javascript">
            alert("Usuário não encontrado!");
            window.location="../view/login.php";
        </script>';

    }

?>