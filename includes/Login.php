<?php
require_once 'Db.php';
require_once 'Config.php';

Class UserLogin extends Database
{
    protected $username;
    protected $password;

    public function __construct($username,$password)
    {
        $this->username=$username;
        $this->password=$password;
    }
}

Class LogIn extends UserLogin
{
    public function logIn($username,$password)
    {
        $query = "SELECT * FROM users WHERE $username = '$username'";
        $result = $this->connect()->query($query);

        if(password_verify($_POST["password"],$password) & mysqli_num_rows($result) > 0)
        {
            session_start();
            echo "User exists and password validation came throught";
        }
        else
        {
            echo"Either password validation is wrong or the user does not exists";
        }

        
    }
}