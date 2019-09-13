<?php

    class Atividade_inscricao{
        private $atividade_codigo;
        private $inscricao_cpf;
        private $inscricao_ano;
        private $presente;
    }

    public function __construct($atividade_codigo, $inscricao_cpf, $inscricao_ano, $presente){
        $this->atividade_codigo = $atividade_codigo;
        $this->inscricao_cpf = $inscricao_cpf;
        $this->inscricao_ano = $inscricao_ano;
        $this->presente = $presente;
    }

    public function getAtividade_codigo(){
		return $this->atividade_codigo;
	}

	public function setAtividade_codigo($atividade_codigo){
		$this->atividade_codigo = $atividade_codigo;
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
?>