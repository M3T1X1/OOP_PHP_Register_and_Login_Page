<?php
require_once 'includes/Db.php';
require_once 'includes/Config.php';
require_once 'includes/Register.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
</head>
<body>
<form action = "register_page.php" method="post">
Email:<br>
<input type="text" name="email"><br>
Username:<br>
<input type="text" name="username"><br>
Password:<br>
<input type="password" name="password"><br>
<br>
<input type="submit" name="register" value="Register Now!">

</form>
</body>
</html>

<?php
$db = new Database;
$db->connect();

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST["register"]))
    {
        $user= new User;
        $user->registerIn();
    
    }
}
?>