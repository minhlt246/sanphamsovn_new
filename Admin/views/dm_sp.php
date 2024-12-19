

<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới Thương Hiệu</h2>
            <form action="index.php?trang=dm_sp&lenh=them" method="post">
                <input type="text" name="tendm" placeholder="Tên thương hiệu">
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách Thương Hiệu</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Thương hiệu</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                         $ch='';
                         foreach ($mangth as $key => $value) {
                             $ch.='<tr>
                             <td>'.$value['id'].'</td>
                             <td>'.$value['tendm'].'</td>
                             <td class="action-icons">
                                 <a href="index.php?trang=dm_sp&lenh=sua&id='.$value['id'].'">
                                 <i class="fas fa-edit"></i></a>
                                 <a href="index.php?trang=dm_sp&lenh=xoa&id='.$value['id'].'">
                                 <i class="fas fa-trash-alt"></i></a>
                             </td>
                         </tr>';
                         }
                         echo $ch;
                   ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>danh muc 1</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>danh muc 2</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr> -->
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>

<?php
        // $ch='';
        //     foreach (tên mảng as $key => $value) {
        //         $ch.='';
        //     }
        //     echo $ch;
?>