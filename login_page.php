<?php
require_once 'includes/Db.php';
require_once 'includes/Config.php';
require_once 'includes/Login.php';
require_once 'includes/Login_controler.php';
$db= new Database;
$db->connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN PAGE</title>
</head>
<body>
    <form action = "login_page.php" method="post">
        Username: <br>
    <input type="text" name="username"><br>
        Password: <br>
    <input type="password" name="password"><br>
    <input type="submit" name="login_btn" value="Log in now!">
    </form>
</body>
</html>
