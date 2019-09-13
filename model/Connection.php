<?php
    class Connection{
        private $conn = '';

        public function __construct(){
            $this->conn = new PDO('mysql:host=localhost;dbname=technomonte;charset=utf8', 'pulveriza', 'pulveriza');
        }

        public function getConn(){
            return $this->conn;
        }    
    }
    
?>