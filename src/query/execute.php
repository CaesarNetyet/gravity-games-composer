<?php
namespace MyApp\Query;
use MyApp\Data\Database;
use PDOException;

class Execute {
    public function execute($qry){
        try {
            $database = new Database("root","","gravity_games");
            $PDO = $database->getPDO();
            $PDO->query($qry);
            $database->disconnectDB();
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}