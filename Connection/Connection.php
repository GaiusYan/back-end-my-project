<?php

namespace Connection;
use PDO;
use PDOException;

class Connection
{
    private String $host = "localhost";
    private int $port = 3306;
    private String $database = "prescription";
    private String $username = "root";
    private String $password = "";

    public function connect()
    {
        try {
            return new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->database", $this->username, $this->password);
        } catch (PDOException $exception) {
            die("Error to connect: " . $exception->getMessage());
        }
    }

}