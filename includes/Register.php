<?php
require_once("Db.php");
require_once("Config.php");

class User extends Database
{
    private $email;
    private $username; 
    private $password;
    

        protected function __construct()
        {
            $this->email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);;
            $this->username =filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
            $this->password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        }

        protected function LogIn($email, $username, $password)
        {
    
            $query_insert = "INSERT INTO users ('username', 'password', 'email') VALUES ($this->email,$this->username,$this->password)";
            PDO::query($query_insert);
        }
}