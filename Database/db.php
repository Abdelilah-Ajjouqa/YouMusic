<?php 
class Database {
    private $host = 'localhost';
    private $dbname = 'YouMusic';
    private $user = 'postgres';
    private $password = '123';
    private $conn;

    public function __construct()
    {
        try{
            $dsn = "pgsql:host={$this->host};dbname={$this->dbname};port=5432";
            $this->conn = new PDO($dsn, $this->user, $this->password);
            echo 'connection succes';
        } catch(PDOException $e){
            echo 'connection echoué : '. $e->getMessage();
            exit();
        }
    }

    public function getCnonection(){
        return $this->conn;
    }
}

$database = new Database;
$pdo = $database->getCnonection();