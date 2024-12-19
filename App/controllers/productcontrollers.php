<?php
class ProductControllers{
    public function __construct($iddm){
        if($iddm==''){
            include_once 'models/productmodel.php';
            $dm=new ProductModel();
            $dm->dsdm();
            $dm->dssp(); //$dm->mangsp
            $mangsp=$dm->mangsp;
            include 'view/product.php';
        }else{
            include_once 'models/productmodel.php';
            $dm=new ProductModel();
            $dm->dsdm();
            $mangsp=$dm->dssptheodm($iddm);
            include 'view/product.php';
        }
       
    }

}