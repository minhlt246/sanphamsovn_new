<?php
class ConnectModel {
    private $servername;
    private $username;
    private $password;
    private $databasename;
    private $conn;

    public function __construct() {
        $this->servername = getenv('DB_SERVERNAME') ?: 'localhost';
        $this->username = getenv('DB_USERNAME') ?: 'root';
        $this->password = getenv('DB_PASSWORD') ?: 'root';
        $this->databasename = getenv('DB_NAME') ?: 'shopping-system';
    }

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->databasename};charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            error_log("Connection failed: " . $e->getMessage());
            return null;
        }
    }

    public function selectAll($sql) {
        $this->conn = $this->connect();
        if ($this->conn) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->conn = null;
            return $result;
        } else {
            return [];
        }
    }

    public function selectOne($sql, $id) {
        $this->conn = $this->connect();
        if ($this->conn) {
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->conn = null;
            return $result;
        } else {
            return [];
        }
    }
}
?>



