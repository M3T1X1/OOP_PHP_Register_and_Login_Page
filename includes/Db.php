<?php
require_once 'Config.php';

class Database

{
    private $db_host = DB_HOST;
    private $db_user = DB_USER;
    private $db_password = DB_PASSWORD;
    private $db_name = DB_NAME;

    public function connect()
    {
        try
        {
         $dsn ='mysql:host='.$this->db_host.';dbname='.$this->db_name;
         $pdo =new PDO($dsn,$this->db_user,$this->db_password);  
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch(PDOException $e)
        {
        echo "not connected".$e->getMessage();
        }
      
        return $pdo;
    }
}
?>