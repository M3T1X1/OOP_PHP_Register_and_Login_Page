<?php
require_once("Db.php");
require_once("Config.php");

class UserRegister extends Database
{
 
    protected $email;
    protected $username; 
    protected $password;
    
        public function __construct($email,$username,$password)
        {
            $this->email = $email;
            $this->username = $username;
            $this->password =$password;
            
        }
        
}


Class Register extends UserRegister
{
    public function registerIn($email,$username,$password) 
    {
       $query_e = "SELECT * FROM users WHERE email = '$email'";
       $query_e_result = $this->connect()->query($query_e);

       $query_u = "SELECT * FROM users WHERE username = '$username'";
       $query_u_result = $this->connect()->query($query_u);
       
       if(mysqli_num_rows($query_e_result) > 0)
       {
        mysqli_report(MYSQLI_REPORT_OFF);
        echo "Email already taken!"."<br>";
       };
       if(mysqli_num_rows($query_u_result) > 0)
       {
        mysqli_report(MYSQLI_REPORT_OFF);
        echo "Username already taken!"."<br>";
       }
        else
        {
        $query_insert = "INSERT INTO users (email, password, username) VALUES ('$email','$password','$username')";
        $this->connect()->query($query_insert);
        }
    }
}