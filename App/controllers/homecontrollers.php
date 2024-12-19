<?php
class HomeControllers{ // dang ở index
    public function __construct($id, $iddm){
        include_once 'models/homemodel.php';
        $sp=new HomeModel();
        if($id==''){
            
            $sp->dssp(); //$sp->mangsp;
            include_once 'view/home.php';
        }else{
            $sp->onesp($id); //$sp->motsp
            // danh sach san pham lien quan
            $mangsplienquan=$sp->dssplienquan($id, $iddm);
            include_once 'view/productdetail.php';
        }
        
    }

}
?>