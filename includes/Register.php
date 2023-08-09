<?php
require_once("Db.php");
require_once("Config.php");

class User extends Database
{
 
    protected $email;
    protected $username; 
    protected $password;
    
        public function __construct($email,$username,$password)
        {
            $this->$email = $email;
            $this->$username = $username;
            $this->$password =$password;
            
        }
        
}

Class Register extends User
{
    public function registerIn($username,$password,$email) 
    {
        $query_insert = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";

        $this->connect()->query($query_insert);
    }
}