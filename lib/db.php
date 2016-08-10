<?php
class DB{
    
    public  $connection;
    
    public function __construct($host, $user, $psw, $db_name)
    {
        $connect = new mysqli($host, $user, $psw, $db_name);
        if($connect->error){
            throw new Exception('Could not connect to DB');
        } else{
            $connect->query("SET NAMES 'utf8'");
            $connect->query("SET CHARACTER SET 'utf8'");
            $connect->query("SET SESSION collation_connection = 'utf8_general_ci'");
            $this->connection = $connect;
        }
        
    }

    /**
     * @return mysqli
     */
    public function getConnection()
    {
        return $this->connection;
    }
}