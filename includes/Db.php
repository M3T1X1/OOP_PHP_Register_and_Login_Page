<?php

class Database
{
    private $db_host = DB_HOST;
    private $db_user = DB_USER;
    private $db_password = DB_PASSWORD;
    private $db_name = DB_NAME;

    public $conn;
    private $db_Handler;
    private $db_error;
   

    public function connect()
    {
      $conn = 'mysql:host='.$this->db_host.';dbname='.$this->db_name;  

      $options = array(
         PDO::ATTR_PERSISTENT=>true,
         PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
      );
      
      try
      {
        $this->db_Handler = new PDO($conn, $this->db_user,$this->db_password,$options);
      }
      catch(PDOException $e)
      {
       die("Not connected: ".$e->getMessage());
      }
        
    }
}
?>