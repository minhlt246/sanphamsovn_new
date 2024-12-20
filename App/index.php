<?php
include 'view/header.php';
$page=isset($_GET['trang']) ? $_GET['trang']:'home';
$id=isset($_GET['id']) ? $_GET['id'] : '';
$iddm=isset($_GET['iddm']) ? $_GET['iddm'] : '';
switch($page){
    case 'home':
        include 'controllers/homecontrollers.php';
        $homecontrollers=new HomeControllers($id, $iddm);
        break;
    case 'product':
        include 'controllers/productcontrollers.php';
        $productcontrollers=new ProductControllers($iddm);
        break;
    case 'about':
        include 'controllers/aboutcontrollers.php';
        $aboutcontrollers=new AboutControllers();
        break;
    case 'contact':
        include 'controllers/contactcontrollers.php';
        $contactcontrollers=new ContactControllers();
        break;

    case 'login':
}
include 'view/footer.php';
?>