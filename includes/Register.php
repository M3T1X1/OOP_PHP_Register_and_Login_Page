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
        $stmt_insert = $this->connect()->query($query_insert);

        $query_email= "SELECT * FROM users WHERE username = '$email'";
        $stmt_select_email = $this->connect()->query($query_email);

        $query_user= "SELECT * FROM users WHERE username = '$username'";
        $stmt_select_user = $this->connect()->query($query_user);

        

        if(mysqli_num_rows($stmt_select_email) > 1)
        { 
            exit("That email is already taken!");
        }
/*
        if(mysqli_num_rows($stmt_select_user) > 1)
        {
            echo "This user already exists!";
        }
*/        
    }
}