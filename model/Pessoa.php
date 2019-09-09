<?php

    require_once('Connection.php');   

    class Pessoa{
        private $nome;
        private $cpf;
        private $celular;
        private $email;
        private $cidade;
        private $estado;

        public function __construct($nome, $cpf, $email, $cidade, $estado, $celular){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->celular = $celular;
        }
        
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getCpf(){
            return $this->cpf;
        }
    
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
    
        public function getCelular(){
            return $this->celular;
        }
    
        public function setCelular($celular){
            $this->celular = $celular;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }
    
        public function getCidade(){
            return $this->cidade;
        }
    
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
    
        public function getEstado(){
            return $this->estado;
        }
    
        public function setEstado($estado){
            $this->estado = $estado;
        }

        public function cadastrarPessoa(){
            $conn = new Connection();

            $cadastrar = $conn->getConn()->prepare(
                "INSERT INTO pessoa (nome, cpf, email, cidade, estado, telefone) 
                values(:nome, :cpf, :email, :cidade, :estado, :celular)"
            );

            $cadastrar->bindParam(':nome', $this->nome);
            $cadastrar->bindParam(':cpf', $this->cpf);
            $cadastrar->bindParam(':email', $this->email);
            $cadastrar->bindParam(':cidade', $this->cidade);
            $cadastrar->bindParam(':estado', $this->estado);
            $cadastrar->bindParam(':celular', $this->celular);

            return $cadastrar->execute();
            
        } 
        
    }

?>