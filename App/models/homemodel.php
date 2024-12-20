<?php
class HomeModel {
    public $listproducts;
    public $description;

    public function listproducts() { // phương thức
        include_once 'models/connectmodel.php';
        $products = new ConnectModel();
        $sql = "SELECT * FROM Products";
        $this->listproducts = $products->selectall($sql);
    }

    public function description($product_id) { // phương thức
        include_once 'models/connectmodel.php';
        $products = new ConnectModel();
        $sql = "SELECT * FROM Products WHERE product_id = :id";
        $this->description = $products->selectone($sql, ['id' => $product_id]);
    }

    public function similarproducts($product_id, $category_id) {
        $sql = "SELECT * FROM Products WHERE category_id = :category_id AND product_id <> :product_id";
        // kết nối database
        include_once 'models/connectmodel.php';
        $products = new ConnectModel();
        $products->connect();
        // chuẩn hóa câu lệnh sql
        $stmt = $products->conn->prepare($sql);
        $stmt->bindParam(":category_id", $category_id);
        $stmt->bindParam(":product_id", $product_id);
        // gọi thực hiện câu lệnh
        $stmt->execute();
        // chuyển dữ liệu thành mảng liên kết (nếu cần)
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dữ liệu thành mảng liên kết
        // đóng kết nối
        $products->conn = null; // đóng kết nối database
        // trả về kết quả (nếu cần)
        return $kq; // biến này chứa mảng các dòng dữ liệu trả về.
    }
}
?>