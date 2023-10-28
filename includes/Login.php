<?php
require_once 'Db.php';
require_once 'Config.php';

Class UserLogin extends Database
{
    protected $username;
   
    public function __construct($username)
    {
        $this->username=$username;
    }
}

Class LogIn extends UserLogin
{
    public function logIn($username)
    {
        $query = "SELECT username, password FROM users WHERE username = '$username'";
        $result = $this->connect()->query($query);
        $row = $result->fetch_assoc();
       

        if(mysqli_num_rows($result) > 0)
        {
            echo "User exists";
            echo "<br/>";
            
            if(password_verify($_POST["password"],$row["password"]))
            {
                session_start();
                echo "Password correct";
            }   
        }
        
        
      
    }

 
}
