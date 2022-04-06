<?php

class Database
{
    private $server = "mysql:host=localhost;dbname=rental";
    private $username = "root";
    private $password = "ezra2030";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $conn;

    public function connect()
    {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $enter) {
            echo "There is some problem in connection: " . $enter->getMessage();
        }
    }
}

$pdo = new Database();
