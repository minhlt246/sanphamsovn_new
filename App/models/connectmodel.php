<?php
class ConnectModel {
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $databasename = 'shopping-system';
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->databasename.";charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function selectall($sql) {
        try {
            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->conn = null;
            return $kq;
        } catch(PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    }

    public function selectone($sql, $id) {
        try {
            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $kq = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->conn = null;
            return $kq;
        } catch(PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    }
}
?>