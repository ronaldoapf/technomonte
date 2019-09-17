<?php

    require_once('Connection.php');

    class Atividade{
        private $codigo;
        private $nome;
        private $vagastotais;
        private $vagasdisponiveis;
        private $ano;

        public function __construct($codigo="", $nome="", $vagastotais="", $vagasdisponiveis="", $ano=""){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->vagastotais = $vagastotais;
            $this->vagasdisponiveis = $vagasdisponiveis;
            $this->ano = $ano;
        }

        public function getCodigo(){
            return $this->codigo;
        }
    
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getVagastotais(){
            return $this->vagastotais;
        }
    
        public function setVagastotais($vagastotais){
            $this->vagastotais = $vagastotais;
        }
    
        public function getVagasdisponiveis(){
            return $this->vagasdisponiveis;
        }
    
        public function setVagasdisponiveis($vagasdisponiveis){
            $this->vagasdisponiveis = $vagasdisponiveis;
        }
    
        public function getAno(){
            return $this->ano;
        }
    
        public function setAno($ano){
            $this->ano = $ano;
        }

        public function buscarAtividades(){
            $conn = new Connection();

                $select = $conn->getConn()->prepare(
                    'SELECT codigo, nomeAtividade, vagasdisponiveis, tipo FROM atividade WHERE ano = 2019'
                );
                
                $select->execute();

                $jsonAtividades = $select->fetchAll();

                if($jsonAtividades) return $jsonAtividades;

                else return 'error';
        }

        public function buscarAtividadeByName($minicurso, $maratona, $workshops){
            $conn = new Connection();

            for($i=0; $i<3; $i++){
                $codigos = [];

                $select = $conn->getConn()->prepare(
                    'SELECT codigo FROM atividade WHERE nomeAtividade = ?'
                );

                if($i == 0) $select->bindValue(1, $minicurso);

                else if($i == 1) $select->bindValue(2, $maratona);

                else $select->bindValue(3, $workshops);
                
                $select->execute();

                $codigos[$i] = $select->fetch();
            }

            return $codigos;
        }

    }

?>