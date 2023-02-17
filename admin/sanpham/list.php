
    <section class="wrapper">

    
        <table border="1" cellspacing="0" >
            <tr style="background:tan; border: none;">
                <th></th>
                <th>Mã loại</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th></th>
            </tr>
            <?php
                include 'link.php';
                // $sql = "SELECT * FROM hanghoa";
                $sql = "SELECT a.ma_loai , ten_loai , b.id , ten_hh ,don_gia ,mo_ta ,hinh
                        FROM loai a
                        INNER JOIN hanghoa b ON a.ma_loai = b.ma_loai";
                $kq = $conn -> query($sql);
                foreach ($kq as $key => $row) {
            ?>
                <tr>
                    <input type="hidden" value="<?php echo $row['id'] ?>">
                    <td><input type="checkbox" name="checkbox"></td>
                    <td><?php echo $row['ma_loai'] ?></td>
                    <td><?php echo $row['ten_hh'] ?></td>
                    <td><img src="<?php echo "./image/".$row['hinh'] ?>" alt=""></td>
                    <td><?php echo $row['don_gia'] ?></td>
                    <td><?php echo $row['mo_ta'] ?></td>
                    <td>
                        <button><a href="sanpham/update.php?id=<?php echo $row['id'] ?>">Sửa</a></button> 
                        <button><a onclick="return confirm('bạn có chắc muốn xoá không???')" href="sanpham/remove.php?id=<?php echo $row['id'] ?>">Xoá</a></button>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
        <button>Chọn tất cả</button>
        <button>Bỏ chọn tất cả</button>
        <button>Xoá các mục đã chọn</button>
        <button><a href="index.php?act=addsp">Nhập thêm</a></button>

    </section>


    
    
</body>
</html>