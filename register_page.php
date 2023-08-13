<?php
require_once 'includes/Db.php';
require_once 'includes/Config.php';
require_once 'includes/Register.php';
require_once 'includes/Register_controler.php';
$db = new Database;
$db->connect();
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
<input type="text" name="email" required><br>
Username:<br>
<input type="text" name="username" required><br>
Password:<br>
<input type="password" name="password" required><br>
<br>
<input type="submit" name="register_btn" value="Register Now!">

</form>
</body>
</html>

