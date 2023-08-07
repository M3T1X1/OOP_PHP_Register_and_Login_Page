<?php
require_once("Db.php");
require_once("Config.php");

class User extends Database
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
            $query_insert = "INSERT INTO users (username, password, email) VALUES ()";

            $this->connect()->query($query_insert);
        }
}