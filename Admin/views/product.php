<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới Sản Phẩm</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Tên sản phẩm">
                <input type="text" name="fileToUpload" id="fileToUpload" placeholder="Giá">
                <select name="" id="iddm" placeholder="chon danh muc ">
                    <option value="1">Nike </option>
                    <option value="2">Adidas</option>
                </select>
                <input type="file" name="product_image"> <!-- Thêm trường nhập hình ảnh -->
                <input name="spnew" type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($dssp as $sp) { ?>
                    <tr>
                        <td><?= $sp['id'] ?></td>
                        <td><img style="width:100px" src="./public/img/<?= $sp['img'] ?>" alt=""></td>
                        <td><?= $sp['name'] ?></td>
                        <td><?= $sp['price'] ?></td>
                        <td><?= $sp['view'] ?></td>
                        <td class="action-icons">
                            <a href="index.php?trang=edit&id=<?= $sp['id'] ?>"><i class="fas fa-edit"></i></a>
                            <a href="index.php?trang=delete&id=<?= $sp['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>