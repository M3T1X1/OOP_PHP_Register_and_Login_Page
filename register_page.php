<?php
require_once 'includes/Db.php';
require_once 'includes/Config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
</head>
<body>
<form action = "Config.php" method="post">
Email:<br>
<input type="text" name="email"><br>
Username:<br>
<input type="text" name="username"><br>
Password:<br>
<input type="password" name="password"><br>

</form>
</body>
</html>