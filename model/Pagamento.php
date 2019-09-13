<?php

    class Pagamento{
        private $codigo;
        private $datapagamento;
        private $valor;
        private $usuario_responsavel;
        private $notificado;
        private $inscricao_cpf;
        private $inscricao_ano;

        public function __construct($codigo, $datapagamento, $valor, $usuario_responsavel, $notificado, $inscricao_cpf, $inscricao_ano){
            $this->codigo = $codigo;
            $this->datapagamento  = $datapagamento;
            $this->valor = $valor;
            $this->usuario_responsavel = $usuario_responsavel;
            $this->notificado = $notificado;
            $this->inscricao_cpf = $inscricao_cpf;
            $this->inscricao_ano = $inscricao_ano;
        }

        public function getCodigo(){
            return $this->codigo;
        }
    
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
    
        public function getDatapagamento(){
            return $this->datapagamento;
        }
    
        public function setDatapagamento($datapagamento){
            $this->datapagamento = $datapagamento;
        }
    
        public function getValor(){
            return $this->valor;
        }
    
        public function setValor($valor){
            $this->valor = $valor;
        }
    
        public function getUsuario_responsavel(){
            return $this->usuario_responsavel;
        }
    
        public function setUsuario_responsavel($usuario_responsavel){
            $this->usuario_responsavel = $usuario_responsavel;
        }
    
        public function getNotificado(){
            return $this->notificado;
        }
    
        public function setNotificado($notificado){
            $this->notificado = $notificado;
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
    }

?>