<?php

    class Usuario{
        private $usuario;
        private $nome;
        private $senha;
    }

    public function __construct($usuario, $nome, $senha){
        $this->usuario = $usuario;
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

?>