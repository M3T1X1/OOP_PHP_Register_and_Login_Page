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
             $conn = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_name);

                if($conn->connect_errno)
                {
                    exit($conn->connect_error);
                }
                else
                {
                    return $conn;
                }
        

        
    }

}
?>