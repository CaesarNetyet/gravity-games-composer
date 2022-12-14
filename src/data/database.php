<?php

namespace MyApp\Data;
use PDO;
use PDOException;

class Database {
    public $objetoPDO = null;
    public $user = "";
    public $password = "";
    public $dbname = "";
    
    public function __construct($user, $password, $dbname) {
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function getPDO()
    {
        try {
            $host = "mysql:host=localhost;dbname=$this->dbname";
            $PDO = new PDO($host, $this->user, $this->password);
            return $PDO;
        } catch (PDOException $e) { 
            echo "Error: " . $e->getMessage();
        }
    }
    public function disconnectDB () {
        $this->objetoPDO = null;
    }
}