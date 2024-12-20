<main>
    <div class="container">
        <div class="left-box">
            <h2>Danh Mục</h2>
            <!-- Danh sách danh mục -->
            <ul>
                <?php
                $ch = '';
                foreach ($dm->mangdm as $key => $value) {
                    $ch .= '<li><a href="index.php?trang=product&iddm=' . $value['id'] . '">' . $value['tendm'] . '</a></li>';
                }
                echo $ch;
                ?>
            </ul>
        </div>

        <div class="right-box">
            <div class="product-list">
                <?php
                $ch = '';
                    foreach ($listproducts as $key => $value) {
                        $ch .= '<div class="product">
                        <a href="index.php?trang=home&id=' . $value['id'] . '&iddm=' . $value['iddm'] . '">
                        <img src="public/img/' . $value['hinh'] . '" alt="">
                        </a>
                        <h3>' . $value['tensp'] . '</h3>
                        <p>' . $value['mota'] . '</p>
                        </div>';
                    }
                echo $ch;
                ?>
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