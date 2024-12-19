<?php
class Product_M{
    public function dssp(){
        $sql="select sanpham.*,tendm from sanpham inner join dm_sp on sanpham.iddm=dm_sp.id";
        include_once 'models/connectmodel.php';
        $sp=new ConnectModel();
        return $sp->selectall($sql);
    }
    public function themsp($tensp, $hinh, $mota, $iddm){
        $sql="insert into sanpham(tensp, hinh, mota, iddm) values(:tensp, :hinh, :mota, :iddm)";
        include_once 'models/connectmodel.php';
        $sp=new ConnectModel();
        $sp->ketnoi();
        $stmt = $sp->conn->prepare($sql); 
        $stmt->bindParam(":tensp", $tensp, PDO::PARAM_STR);
        $stmt->bindParam(":hinh", $hinh, PDO::PARAM_STR);
        $stmt->bindParam(":mota", $mota, PDO::PARAM_STR);
        $stmt->bindParam(":iddm", $iddm, PDO::PARAM_INT);
        $stmt->execute();
        $sp->conn = null; // đóng kết nối database
    }
    public function xoasp($id){
        $sql="delete from sanpham where id=:id";
        include_once 'models/connectmodel.php';
        $sp=new ConnectModel();
        $sp->ketnoi();
        $stmt = $sp->conn->prepare($sql); 
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $sp->conn = null; // đóng kết nối database
    }
}
?>