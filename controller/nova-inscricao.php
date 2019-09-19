<?php

    require_once('../model/Inscricao.php');;
    require_once('../model/Atividade_inscricao.php');
    require_once('../model/Atividade.php');

    if(isset($_POST)){
        
        new DateTime("now", new DateTimeZone('America/Sao_Paulo'));
        $data = date("Y-m-d H:i:s");

        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
        $ano = '2019';
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, "estado", FILTER_SANITIZE_STRING);
        $celular = filter_input(INPUT_POST, "celular", FILTER_SANITIZE_STRING);
        $whatsapp = filter_input(INPUT_POST, "whatsapp", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
        $estudante = filter_input(INPUT_POST, "estudante", FILTER_SANITIZE_STRING);
        $instituicao = filter_input(INPUT_POST, "instituicao", FILTER_SANITIZE_STRING);
        $maratona = filter_input(INPUT_POST, "Maratona", FILTER_SANITIZE_STRING);
        $minicurso = filter_input(INPUT_POST, "Minicursos", FILTER_SANITIZE_STRING);
        $workshop = filter_input(INPUT_POST, "Workshops", FILTER_SANITIZE_STRING);
        $tamanhoCamiseta = filter_input(INPUT_POST, "camiseta", FILTER_SANITIZE_STRING);
        
        $credenciamento = 'N';

        // $cpf, $ano, $nome, $endereco, $cidade, $estado, $celular, $whatsapp, $email, $data, $estudante, $instituicao, $credenciamento
        
        $novaInscricao = new Inscricao($cpf, $ano, $nome, $endereco, $cidade, $estado, $celular, $whatsapp, $email, $data, $estudante, $instituicao, $credenciamento, $tamanhoCamiseta);
        $return = $novaInscricao->novaInscricao();
		
		if($return){
			$presente = 'N';

			$salvarInscricaoAtividades = new Atividade_inscricao();
			$salvarInscricaoAtividades->salvarAtividades($maratona, $minicurso, $workshop, $cpf, $ano, $presente);

			/*$fazerUpdateAtividades = new Atividade();
			$return = $fazerUpdateAtividades->updateAtividade($maratona, $minicurso, $workshop);

			$_SESSION['json'] = json_decode($return);
			*/
			
			echo'
				<script type="text/javascript">
					alert("Inscrição realizada com sucesso!"'.$teste.');
					window.location="../view/inscricao.php";
				</script>  
				';
		}
		else{
			echo'
					<script type="text/javascript">
						alert("Falha na realização da inscrição! Possivelmente já existe uma inscrição com o CPF informado.");
						window.location="../view/inscricao.php";
					</script>  
				';
		}
	}
?>