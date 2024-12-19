<?php
    class Dm_sp_M {
        public function dsdm(){
            include_once 'models/connectmodel.php';
            $th = new ConnectModel();
            $sql = "select * from dm_sp";
            return $th->selectall($sql);
        }
    
        public function themdm($tendm){
            $sql = "INSERT INTO dm_sp (tendm) VALUES (:tendm)";
            include_once 'models/connectmodel.php';
            $th = new ConnectModel();
            $th->ketnoi();
            $stmt = $th->conn->prepare($sql); 
            $stmt->bindParam(":tendm", $tendm, PDO::PARAM_STR);
            $stmt->execute();
            $th->conn = null; // đóng kết nối database
        }
        public function dssptheodm($id){
            $sql="select * from sanpham where iddm=:id";
            include_once 'models/connectmodel.php';
            $th = new ConnectModel();
            $th->ketnoi();
            $stmt = $th->conn->prepare($sql); 
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
            $this->$conn = null; // đóng kết nối database
            return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
        }
        public function xoadm($id){
            $sql = "delete from dm_sp where id = :id";
            if(count($this->dssptheodm($id))==0){
                include_once 'models/connectmodel.php';
                $th = new ConnectModel();
                $th->ketnoi();
                $stmt = $th->conn->prepare($sql); 
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                $th->conn = null; // đóng kết nối database
            }else{
                echo "Có ".count($this->dssptheodm($id))." sản phẩm thuộc danh mục nên không thể xóa.";
            }
        }
        public function mautinsua($id){
            $sql="select * from dm_sp where id=:id";
            include_once 'models/connectmodel.php';
            $th=new ConnectModel();
            return $th -> selectone($sql, $id);
        }
        public function capnhatdm($tendm, $id){
            $sql="UPDATE dm_sp SET tendm =:tendm WHERE id=:id";
            include_once 'models/connectmodel.php';
            $th = new ConnectModel();
            $th->ketnoi();
            $stmt = $th->conn->prepare($sql); 
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":tendm", $tendm, PDO::PARAM_STR);
            $stmt->execute();
            $th->conn = null; // đóng kết nối database
        }
    }
?>
