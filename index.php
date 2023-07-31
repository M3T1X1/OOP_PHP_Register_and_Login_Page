<?php
require_once "includes/Config.php";
require_once "includes/Db.php";

    $object = new Database;
    echo $object->connect();
?>