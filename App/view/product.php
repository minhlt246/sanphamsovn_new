
<main>
<div class="container">
    <div class="left-box">
        <h2>Danh Mục</h2>
        <!-- Danh sách danh mục -->
        <ul>
            <?php
                $ch='';
                foreach ($dm->mangdm as $key => $value) {
                    $ch.='<li><a href="index.php?trang=product&iddm='.$value['id'].'">'.$value['tendm'].'</a></li>';
                }
                echo $ch;
            ?>
                <!-- <li><a href="#">Danh mục 1</a></li>
                <li><a href="#">Danh mục 2</a></li>
                <li><a href="#">Danh mục 3</a></li> -->
                <!-- Thêm danh mục cần hiển thị -->
        </ul>
    </div>

    <div class="right-box">
        <div class="product-list">
            <?php
                $ch='';
                    foreach ($mangsp as $key => $value) {
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
            <!-- Danh sách sản phẩm -->
         
            <!-- <div class="product">
                <img src="public/img/hinh2.webp" alt="">
                <h3>Sản Phẩm 2</h3>
                <p>Mô tả sản phẩm 2.</p>
            </div>
            <div class="product">
                <img src="public/img/hinh3.webp" alt="">
                <h3>Sản Phẩm 3</h3>
                <p>Mô tả sản phẩm 3.</p>
            </div>
            <div class="product">
                <img src="public/img/hinh4.webp" alt="">
                <h3>Sản Phẩm 4</h3>
                <p>Mô tả sản phẩm 4.</p>
            </div>
            <div class="product">
                <img src="public/img/hinh5.webp" alt="">
                <h3>Sản Phẩm 5</h3>
                <p>Mô tả sản phẩm 5.</p>
            </div>
            <div class="product">
                <img src="public/img/hinh6.webp" alt="">
                <h3>Sản Phẩm 6</h3>
                <p>Mô tả sản phẩm 6.</p>
            </div> -->
        </div>  

        <div class="pagination">
            <!-- Phân trang -->
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <!-- Thêm các trang khác cần hiển thị -->
        </div>
    </div>
</div>
</main>

