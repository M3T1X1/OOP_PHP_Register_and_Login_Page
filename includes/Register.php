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
    public function registerIn($email,$username,$password) 
    {
        $query_insert = "INSERT INTO users (email, password, username) VALUES ('$email','$password','$username')";
        

        $query_select_username = "SELECT * FROM users WHERE username = '$username'";
        $stmt_select_username = $this->connect()->query($query_select_username);

        $query_select_email = "SELECT * FROM users WHERE email = '$email'";
        $stmt_select_email = $this->connect()->query($query_select_email);

            if(mysqli_num_rows($stmt_select_username) >= 1)
            {
            echo "User exists";
            }

            if(mysqli_num_rows($stmt_select_email) >= 1)
            {
             echo "Email exists";
            }
       
    

   
    }
}