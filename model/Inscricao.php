<?php

    include 'Connection.php';

    class Inscricao{
        private $cpf; //PK ok
        private $ano; //PK ok
        private $nome; // ok
        private $endereco; // ok
        private $cidade; // ok
        private $estado; // ok
        private $celular; // ok
        private $whatsapp; // ok
        private $email; // ok 
        private $data; // ok
        private $estudante; // ok 
        private $instituicao; // ok
        private $crendenciamento; 

        public function __construct($cpf="", $ano="", $nome="", $endereco="", $cidade="", $estado="", $celular="", $whatsapp="", $email="", $data="", $estudante="", $instituicao="", $crendenciamento=""){
            $this->cpf = $cpf;
            $this->ano = $ano;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->celular = $celular;
            $this->whatsapp = $whatsapp;
            $this->email = $email;
            $this->data = $data;
            $this->estudante = $estudante;
            $this->instituicao = $instituicao;
            $this->credenciamento = $crendenciamento;
        }

        public function getCpf(){
            return $this->cpf;
        }
    
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
    
        public function getAno(){
            return $this->ano;
        }
    
        public function setAno($ano){
            $this->ano = $ano;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getEndereco(){
            return $this->endereco;
        }
    
        public function setEndereco($endereco){
            $this->endereco = $endereco;
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
    
        public function getCelular(){
            return $this->celular;
        }
    
        public function setCelular($celular){
            $this->celular = $celular;
        }
    
        public function getWhatsapp(){
            return $this->whatsapp;
        }
    
        public function setWhatsapp($whatsapp){
            $this->whatsapp = $whatsapp;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }
    
        public function getData(){
            return $this->data;
        }
    
        public function setData($data){
            $this->data = $data;
        }
    
        public function getEstudante(){
            return $this->estudante;
        }
    
        public function setEstudante($estudante){
            $this->estudante = $estudante;
        }
    
        public function getInstituicao(){
            return $this->instituicao;
        }
    
        public function setInstituicao($instituicao){
            $this->instituicao = $instituicao;
        }
    
        public function getCrendenciamento(){
            return $this->crendenciamento;
        }
    
        public function setCrendenciamento($crendenciamento){
            $this->crendenciamento = $crendenciamento;
        }


        public function novaInscricao(){
            $conn = new Connection();

            $insert = $conn->getConn()->prepare(
                "INSERT INTO inscricao (cpf, ano, nome, endereco, cidade, estado, 
                celular, whatsapp, email, data, estudante, instituicao, credenciamento) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
            );

            $insert->bindValue(1, $this->cpf);
            $insert->bindValue(2, $this->ano);
            $insert->bindValue(3, $this->nome);
            $insert->bindValue(4, $this->endereco);
            $insert->bindValue(5, $this->cidade);
            $insert->bindValue(6, $this->estado);
            $insert->bindValue(7, $this->celular);
            $insert->bindValue(8, $this->whatsapp);
            $insert->bindValue(9, $this->email);
            $insert->bindValue(10, $this->data);
            $insert->bindValue(11, $this->estudante);
            $insert->bindValue(12, $this->instituicao);
            $insert->bindValue(13, $this->credenciamento);
            
            return $insert->execute();
        }

        public function verificarInscricao($cpf){
            $conn = new Connection();

            $select = $conn->getConn()->prepare(

                'SELECT * FROM inscricao insc
                INNER JOIN atividade_inscricao atvinsc ON insc.cpf = atvinsc.inscricao_cpf AND insc.ano = atvinsc.inscricao_ano
                INNER JOIN atividade atv ON atv.codigo = atvinsc.atividade_codigo WHERE insc.cpf = ? and insc.ano = 2019'
            );

            $select->bindValue('1', $cpf);

            $retorno = $select->execute();

            if($retorno == 1){

                if($select->rowCount() > 0){
                    $jsonInscrito = $select->fetchAll();
                    return $jsonInscrito;
                }

                else return 'error';
            }

        }

        public function updateInscricao($nome, $cpf, $estado, $email, $endereco, $cidade, $celular, $instituicao, $ano){
            $conn = new Connection();

            $update = $conn->getConn()->prepare(
                'UPDATE inscricao set nome = ?, estado = ?, email = ?, 
                endereco = ?, cidade = ?, celular = ?, instituicao = ? WHERE cpf = ? AND ano = ?'
            );

            $update->bindValue(1, $nome);
            $update->bindValue(2, $estado);
            $update->bindValue(3, $email);
            $update->bindValue(4, $endereco);
            $update->bindValue(5, $cidade);
            $update->bindValue(6, $celular);
            $update->bindValue(7, $instituicao);
            $update->bindValue(8, $cpf);
            $update->bindValue(9, $ano);

            $update->execute();
        }

    }

?>