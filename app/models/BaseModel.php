<?php
namespace App\Model;

use PDO;

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
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            return true;
        } catch (PDOException $e) {
            var_dump($e->getMesssages());
        }

    }

    public static function all()
    {
        $model = new static;
        $model->sql = "SELECT * FROM $model->table";
        $stmt = $model->conn->prepare($model->sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $result;
    }

    public function save()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}