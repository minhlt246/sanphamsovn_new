<?php
    include_once 'views/header.php';
    $page=isset($_GET['trang']) ? $_GET['trang'] : 'index';
    $lenh=isset($_GET['lenh']) ? $_GET['lenh'] : '';
    $tendm=isset($_POST['tendm']) ? $_POST['tendm'] : '';
    $id=isset($_GET['id']) ? $_GET['id'] : '';
    $tensp=isset($_POST['tensp']) ? $_POST['tensp'] : '';
    $mota=isset($_POST['mota']) ? $_POST['mota'] : '';
    $iddm=isset($_POST['iddm']) ? $_POST['iddm'] : '';
    $hinh=isset($_FILES['hinh']) ? $_FILES['hinh'] : '';
    $tenfile=isset($_GET['tenfile']) ? $_GET['tenfile'] : '';
    switch ($page){
        case 'home':
            include_once 'views/home.php';
            break;
        case 'dm_sp':
            include_once 'controllers/dm_sp_C.php';
            $th=new Dm_sp_C($tendm, $id);
            $th->index($lenh);
            break;
        case 'users':
            include_once 'views/users.php';
            break;
        case 'updateProduct':
            include_once 'views/updateProduct.php';
            break;
        case 'product':
            include_once 'controllers/product_C.php';
            $sp=new Product_C($lenh, $tensp, $mota, $iddm, $hinh, $id, $tenfile);
            $sp->index();
            break;
    }
?>
git --version

