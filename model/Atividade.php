<?php

    class Atividade{
        private $codigo;
        private $nome;
        private $vagastotais;
        private $vagasdisponiveis;
        private $ano;

        public function __construct($codigo, $nome, $vagastotais, $vagasdisponiveis, $ano){
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
            $conn = new Coonection();
            $jsonAtividades = [];

            try{

                $select = $conn->getConn()->prepare(
                    'SELECT codigo, nome, vagasdisponiveis FROM atividade'
                );
                
                $select->execute();
                $jsonAtividades = $select->fetchAll();
                
                return $jsonAtividades;
                
            }catch(Exception $ex){
                return null;
            }
        }
    }

?>