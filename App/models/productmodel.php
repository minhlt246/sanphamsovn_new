<?php
class ProductModel{
    public $mangdm;
    public $mangsp;
    public function dsdm(){
        include_once 'models/connectmodel.php';
        $dm= new Connectmodel();
        $sql="select * from dm_sp";
        $this -> mangdm = $dm->selectall($sql);
    }
    public function dssp(){ // phương thức
        include_once 'models/connectmodel.php';
        $sp= new ConnectModel();
        $sql ="select *from sanpham";
        // return $sp->selectall($sql);
        $this -> mangsp = $sp->selectall($sql);
    }
    public function dssptheodm($iddm) {
        $sql = "select * from sanpham where iddm = :iddm";
        // kết nối database
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        $sp->ketnoi();
        // chuẩn hóa câu lệnh sql
        $stmt = $sp->conn->prepare($sql);
        $stmt->bindParam(":iddm", $iddm);
        // gọi thực hiện câu lệnh
        $stmt->execute();
        // chuyển dữ liệu thành mảng liên kết (nếu cần)
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
        // đóng kết nối
        $sp->conn = null; // đóng kết nối database
        // trả về kết quả (nếu cần)
        return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
    }
    
}
?>