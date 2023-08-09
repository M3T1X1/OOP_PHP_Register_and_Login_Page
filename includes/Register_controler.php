<?php 
include_once 'Config.php';
include_once 'Db.php';
include_once 'Register.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["register_btn"]))
    {
       $email = $_POST["email"];
       $username = $_POST["username"];
       $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

       $user = new Register($email,$username,$password);
       $user->registerIn($email,$username,$password);
    }
}
?>