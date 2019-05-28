<?php
    namespace App\Model;

    use PDO;

    class BaseModel
    {
        protected $conn;
        private $hostName = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $dbName = 'crud_mvc';
        private $charset = 'utf8';

        public function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->hostName; dbname=$this->dbName; charset=$this->charset", $this->user, $this->pass);
                return true;
            } catch(PDOException $e){
                var_dump($e->getMessages());die;
            }
        }

        public static function getAllData()
        {
            $data = new static();
            $data->sql = "SELECT * FROM $data->table";
            $stmt = $data->conn->prepare($data->sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($data));
            return $result;
        }

        public static function find($id)
        {
            $data = new static();
            $data->sql = "SELECT * FROM $data->table WHERE id = $id";
            $stmt = $data->conn->prepare($data->sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($data));
            
        }
        
        public function delete()
        {
            $this->sql = "DELETE FROM $this->table WHERE id = $this->id";
            $stmt = $this->conn->prepare($this->sql);
            try {
                $stmt->execute();
                return true;
            } catch(PDOException $e){
                var_dump($e->getMessage());die;
            }
        }


    }

?>