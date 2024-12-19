

    <div class="container_cart">
        <div class="product-detail">
            <?php
            $ch='';
                foreach ($sp->motsp as $key => $value) {
                    $ch.='<div class="product-image">
                    <img src="public/img/'.$value['hinh'].'" alt="Product 1">
                </div>
                <div class="product-info">
                    <h2>'.$value['tensp'].'</h2>
                    <p>'.$value['mota'].'</p>
                    <p>Giá: $99.99</p>
                    <button class="order-button">Đặt Hàng</button>
                </div>';
                }
                echo $ch;
            ?>
            
        </div>

        <div class="related-products">
            <h3>Sản Phẩm Liên Quan</h3>
            <?php 
                $ch='';
                foreach ($mangsplienquan as $key => $value) {
                    $ch.=' <div class="product">
                            <div class="product-image">
                            <img src="public/img/'.$value['hinh'].'" alt="Product 2">
                            </div>
                            <div class="product-info">
                                <h4>'.$value['tensp'].'</h4>
                                <p>Giá: $79.99</p>
                            </div>
                        </div>';
                }
                echo $ch;
            ?>
        </div>
    </div>
    