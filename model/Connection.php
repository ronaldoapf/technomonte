<?php
    class Connection{
        private $conn = '';

        public function __construct(){
            $this->conn = new PDO('mysql:host=localhost;dbname=technomonte;charset=utf8', 'technomonte', 'bfadd3s0');
        }

        public function getConn(){
            return $this->conn;
        }    
    }
    
?>
