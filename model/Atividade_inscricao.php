<?php

	require_once('Connection.php');

    class Atividade_inscricao{
		private $atividade_codigo;
        private $inscricao_cpf;
        private $inscricao_ano;
        private $presente;
	
		public function getCodigo_maratona(){
			return $this->codigo_maratona;
		}

		public function setCodigo_maratona($codigo_maratona){
			$this->codigo_maratona = $codigo_maratona;
		}

		public function getCodigo_minicurso(){
			return $this->codigo_minicurso;
		}
		
		public function setCodigo_minicurso($codigo_minicurso){
			$this->codigo_minicurso = $codigo_minicurso;
		}
		
		public function getCodigo_workshop(){
			return $this->codigo_workshop;
		}
		
		public function setCodigo_workshop($codigo_workshop){
			$this->codigo_workshop = $codigo_workshop;
		}
		
		public function getInscricao_cpf(){
			return $this->inscricao_cpf;
		}
		
		public function setInscricao_cpf($inscricao_cpf){
			$this->inscricao_cpf = $inscricao_cpf;
		}

		public function getInscricao_ano(){
			return $this->inscricao_ano;
		}
		
		public function setInscricao_ano($inscricao_ano){
			$this->inscricao_ano = $inscricao_ano;
		}
		
		public function getPresente(){
			return $this->presente;
		}
		
		public function setPresente($presente){
			$this->presente = $presente;
		}

		public function salvarAtividades($maratona, $minicurso, $workshop, $inscricao_cpf, $inscricao_ano, $presente){			
			$conn = new Connection();

			for($i=0; $i<3; $i++){
				echo $i;

				$insert = $conn->getConn()->prepare(
					'INSERT INTO atividade_inscricao(atividade_codigo, inscricao_cpf, inscricao_ano, presente) VALUES (?, ?, ?, ?)'
				);
	
				if($i == 0) $insert->bindValue(1, $maratona);

				else if($i == 1) $insert->bindValue(1, $minicurso);

				else $insert->bindValue(1, $workshop);
				
				$insert->bindValue(2, $inscricao_cpf);
				$insert->bindValue(3, $inscricao_ano);
				$insert->bindValue(4, $presente);
	
				echo $insert->execute();
			}
		}
	}
?>