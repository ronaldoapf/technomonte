<?php

	require_once('Connection.php');

    class Usuario{
        private $usuario;
        private $nome;
        private $senha;
		

		public function verificarUsuarioExistente($usuario, $senha){
			$conn = new Connection();

			$select = $conn->getConn()->prepare(
				'SELECT usuario, senha FROM usuario where usuario = ? AND senha = ?'
			);

			$select->bindValue(1, $usuario);
			$select->bindValue(2, $senha);

			$retorno = $select->execute();

			if($retorno == 1) return $retorno;
			
			else return 'error';

		}
	}
?>