<?php
require_once("Db.php");
require_once("Config.php");

class User
{
 
    private $email;
    private $username; 
    private $password;
    
        public function __construct($email,$username,$password)
        {
            $this->$email = $email;
            $this->$username = $username;
            $this->$password =$password;
            
        }
      
        public function registerIn()
        {
           global $pdo;

            $query_insert = "INSERT INTO users (username, password, email) VALUES ('$this->username','$this->password','$this->email')";
          
            $stmt=$pdo->prepare($query_insert);
            $stmt->execute();
        }
}