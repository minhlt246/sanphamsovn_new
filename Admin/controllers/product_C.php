<?php
class Product_C{
    public $lenh;
    public $tensp;
    public $mota;
    public $iddm;
    public $hinh;
    public $id;
    public $tenfile;
    public function __construct($lenh, $tensp, $mota, $iddm, $hinh, $id, $tenfile){
        $this->lenh=$lenh;
        $this->tensp=$tensp;
        $this->mota=$mota;
        $this->iddm=$iddm;
        $this->hinh=$hinh;
        $this->id=$id;
        $this->tenfile=$tenfile;
    }
    public function index(){
        switch ($this->lenh) {
            case '':
                //cần mảng các sp để view
                include_once 'models/product_M.php';
                $sp=new Product_M();
                $mangsp=$sp->dssp();
                include_once 'views/product.php';
                break;
            
            case 'them':
                //thêm dòng dữ liệu
                include_once 'models/product_M.php';
                $sp=new Product_M();
                $sp->themsp($this->tensp, $this->hinh['name'], $this->mota, $this->iddm);
                //di chuyển file hình vào thư mục public/img/
                move_uploaded_file($this->hinh['tmp_name'], 'public/img/' .$this->hinh['name']);
                //view lại trang
                $mangsp=$sp->dssp();
                include_once 'views/product.php';
                break;
             
            case 'xoa':
                //thuc lenh xoa mau tin theo id
                include_once 'models/product_M.php';
                $sp=new Product_M();
                $sp->xoasp($this->id);
                //xóa file hinh liên quan đến mẫu tin đã xóa
                unlink('public/img/'.$this->tenfile);   
                //view lại trang
                $mangsp=$sp->dssp();
                include_once 'views/product.php';
                break;    
        }
        
    }
}
?>