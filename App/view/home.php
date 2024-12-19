<main>
<div class="container">
    <h2>Sản Phẩm Mới</h2>
    <div class="product-box">
    <?php
        $ch='';
        foreach ($sp->dssp as $key => $value) {
            $ch.='<div class="product">
            <a href="index.php?trang=home&id='.$value['id'].' &iddm='.$value['iddm'].'">
            <img src="public/img/'.$value['hinh'].'" alt="">
            </a>
            <h3>'.$value['tensp'].'</h3>
            <p>'.$value['mota'].'</p>
            </div>';
        }
        echo $ch;
    ?>
        
    </div>
</div>
</main>
