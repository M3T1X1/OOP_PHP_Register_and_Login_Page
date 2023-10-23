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
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->connect()->query($query);
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0)
        {
            echo "User exists";
            echo "<br/>";
            return;
        }
        if(password_verify($_POST["password"],$row['password']))
        {   
            echo "Password is correct";
        }
        print_r($row['password']);
    }
 
}
