<?php
namespace App\Model;

class BaseModel
{
    // Create variable connect to Database
    protected $conn;
    private $host = 'localhost';
    private $dbname = 'collection';
    private $user = 'root';
    private $pass = '';

    public function __construct()
    {
        $this->conn = new PDO("mysql:host = $this->host; dbname = $this->dbname", $this->user, $this->pass);
    }
}