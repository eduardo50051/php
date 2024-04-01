<?php

class Sql extends PDO {
    private $conn;

    public function __construct(){
        $this->conn = new PDO ("mysql:dbname=dbphp;host=localhost", "root", "");
    }

    private function setParams($statement , $parameters = array()){
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }
    
    private function setParam($statement , $key, $value){
        $statement->bindParam($key, $value);
    }

    #[\ReturnTypeWillChange]
    public function query(string $query, ?int $fetchMode = null, mixed ...$fetchModeArgs) {
        $stmt = $this->conn->query($query, $fetchMode, ...$fetchModeArgs);
        return $stmt;
    }

    public function select(string $rawQuery, ?int $fetchMode = PDO::FETCH_ASSOC, mixed ...$fetchModeArgs): array {
        $stmt = $this->query($rawQuery, $fetchMode, ...$fetchModeArgs);
        return $stmt->fetchAll($fetchMode);
    }
}



?>
