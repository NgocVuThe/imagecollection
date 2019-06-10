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

    // public function __construct()
    // {
    //     try {
    //         $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
    //         return true;
    //     } catch (PDOException $e) {
    //         var_dump($e->getMesssages());
    //     }

    // }

    // public static function all()
    // {
    //     $model = new static;
    //     $model->sql = "SELECT * FROM $model->table";
    //     $stmt = $model->conn->prepare($model->sql);
    //     $stmt->execute();
    //     $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    //     return $result;
    // }

    // public function save()
    // {
    //     $field = implode(",", $this->columns);
    //     $bindData = ':'.implode(",:", $this->columns);
    //     $data="";
    //     foreach($this->columns as $col){
    //         if($this->{$col} != null){
    //             $data .= "" . $this->{$col}. ", ";
    //         }
    //     }
    //     $data = rtrim($data, ", ");
    //     $dataArr = explode(",", $data);
    //     $subKey = explode(",", $bindData);
    //     $ArrTotal = array_combine($subKey, $dataArr);
    //     $this->sql = "INSERT INTO $this->table ($field) VALUES ($bindData)";
    //     $stmt = $this->conn->prepare($this->sql);
    //     foreach($ArrTotal as  $key => $value){
    //         $stmt->bindValue($key, $value);
    //     }
    //     try {
    //         $stmt->execute();
    //         return true;
    //     } catch(PDOException $e) {
    //     echo "Them moi that bai";die;
    //     }
    // }

    // public function update()
    // {

    // }

    // public function delete()
    // {
        
    // }
}