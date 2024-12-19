<?php
    class Dm_sp_C{
        public $tendm;
        public $id;
        public function __construct($tendm,$id){
           $this->tendm=$tendm;
           $this->id=$id;
        }
        public function index($lenh){
            switch ($lenh) {
                case '':
                    include_once 'models/dm_sp_M.php';
                    $th=new Dm_sp_M();
                    // cần danh sách tất cả danh mục (thương hiệu)
                    $mangth=$th->dsdm();
                    include_once 'views/dm_sp.php';
                    break;

                case 'them':
                    //thêm dòng dữ liệu
                    include_once 'models/dm_sp_M.php';
                    $th=new Dm_sp_M();
                    $th->themdm($this->tendm);
                    //view lại trang
                    $mangth=$th->dsdm();
                    include_once 'views/dm_sp.php';
                    break;

                case 'xoa':
                    //gọi hàn xóa bên models
                    include_once 'models/dm_sp_M.php';
                    $th=new Dm_sp_M();
                    $th->xoadm($this->id);
                    //view lại trang
                    $mangth=$th->dsdm();
                    include_once 'views/dm_sp.php';
                    break;

                case 'sua':
                    //tìm mẫu tin có id truyền vào
                    include_once 'models/dm_sp_M.php';
                    $th=new Dm_sp_M();
                    $mautinsua=$th->mautinsua($this->id);
                    include_once 'views/dm_sp_Sua.php';
                    break;
                    
                case 'capnhat':
                    //cập nhật mẫu tin
                    include_once 'models/dm_sp_M.php';
                    $th=new Dm_sp_M();
                    $th->capnhatdm($this->tendm, $this->id);
                    //view lại trang
                    $mangth=$th->dsdm();
                    include_once 'views/dm_sp.php';
                    break;
            }
        }
    }
?>