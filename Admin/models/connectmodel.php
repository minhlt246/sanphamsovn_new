<?php
class ConnectModel {
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $conn;

    public function ketnoi() {
        try {
            $this->conn = new PDO("mysql:host=".$this->servername.";dbname=data19304;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'kết nối thành công';
            return $this->conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function selectall($sql) {
        $this->ketnoi();
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
        $this->conn = null; // đóng kết nối database
        return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }

    public function selectone($sql, $id) {
        $this->ketnoi();
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute(); // Execute the statement
        $kq = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch a single record
        $this->conn = null; // đóng kết nối database
        return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }
}
?>