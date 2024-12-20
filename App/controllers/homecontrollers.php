<?php

class HomeControllers
{ // dang ở index
    public function __construct($product_id, $category_id)
    {
        include_once 'models/homemodel.php';
        $products = new HomeModel();
        if ($product_id == '') {
            $products->listproducts(); //$sp->mangsp;
            include_once 'view/home.php';
        } else {
            $products->onesp($product_id); //$sp->motsp
            // danh sach san pham lien quan
            $mangsplienquan = $products->dssplienquan($product_id, $category_id);
            include_once 'view/productdetail.php';
        }

    }
}

?>