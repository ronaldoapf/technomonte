<?php
    class Connection{
        private $conn = '';

        public function __construct(){
            $this->conn = new PDO('mysql:host=localhost;dbname=technomonte;charset=utf8', 'newuser', 'user_password');
        }

        public function getConn(){
            return $this->conn;
        }    
    }
    
?>