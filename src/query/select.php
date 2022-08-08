<?php
namespace MyApp\Query;
use PDO;
use PDOException;
use MyApp\Data\Database;

class Select {
    public function Select($qry){
        try {
            $database = new Database("root","","gravity_games");
            $PDO = $database->getPDO();
            $stmt = $PDO->query($qry);
            $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
            $database->disconnectDB();
            return $rows;
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}