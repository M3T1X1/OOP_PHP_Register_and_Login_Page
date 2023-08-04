<?php

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
        $conn =new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_user,$this->db_password);  
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      
      catch(PDOException $e)
      {
        die("Not connected: ".$e->getMessage());
      }
        
    }
}
?>