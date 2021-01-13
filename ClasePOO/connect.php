<?php

class Connect{
    private $host;
    private $db;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'ClasePOO';
        $this->charset  = 'utf8mb4';
    }


    function connect(){
    
        try{
            $config = parse_ini_file('../../private/config.ini'); 
            $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
            $pdo = new PDO($connection,$config['user'],$config['password']);
        
            return $pdo;


        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
    
}


?>