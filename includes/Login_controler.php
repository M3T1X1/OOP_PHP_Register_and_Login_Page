<?php
include_once 'Db.php';
include_once 'Config.php';
include_once 'Login.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["login_btn"]))
    {
        $username = $_POST["username"];
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

        $login = new LogIn($username,$password);
        $login->logIn($username,$password);
    }
}