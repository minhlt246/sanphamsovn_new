<?php
class HomeModel{
    public $dssp;
    public $motsp;
    public function dssp(){ // phương thức
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        $sql ="select *from sanpham";
        $this -> dssp = $sp->selectall($sql);
    }
    public function onesp($id){ // phương thức
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        $sql ="select * from sanpham where id=:id";
        $this -> motsp = $sp->selectone($sql, $id);
    }
    public function dssplienquan($id, $iddm){
        $sql = "select * from sanpham where iddm = :iddm and id <> :id";
        // kết nối database
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        $sp->ketnoi();
        // chuẩn hóa câu lệnh sql
        $stmt = $sp->conn->prepare($sql); 
        $stmt->bindParam(":iddm", $iddm);
        $stmt->bindParam(":id", $id);
        // gọi thực hiện câu lệnh
        $stmt->execute();
        // chuyển dữ liệu thành mảng liên kết (nếu cần)
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
        // đóng kết nối
        $sp->conn = null; // đóng kết nối database
        // trả về kết quả (nếu cần)
        return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }
    
    // kết nối database
    // chuẩn hóa câu lệnh
    // gọi thực hiện câu lệnh
    // chuyển dữ liệu thành mảng liên kết (nếu cần)
    // đóng kết nối
    // trả về kết quả (nếu cần)

}

?>