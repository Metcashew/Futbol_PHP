<?php
    class conexion{
        private $server = "mysql:host=localhost; dbname=Deportville_com";
        private $username = "root";
        private $password = "SQL100_";
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        protected $conn;
        public function open(){
            try {
                $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
                return $this->conn;
            } catch (PDOException $e) {
                echo "hubo un error" . $e->getPrevious();
            }
        }
        public function close(){ 
            $this->conn = null;
        }
    }
// session_start();
// try {
//     $server = "localhost";
//     $user = "root";
//     $pass = "SQL100_";
//     $port = "3310";
//     $db = "Deportville_com";
    
//     $conn = new PDO("mysql:host=$server; dbname=$db", $user, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "La conexion fue exitosa";

// } catch (PDOException $e) {
//     echo "Error: ", $e-> getMessage();
//     $conn = null;
// }
?>