
    <section class="than">
        <section class="wrapper">
            <section class="text">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </section>

            <form action="" method="POST" enctype="multipart/form-data">
                <p>Mã sản phẩm:</p>
                <select name="maloai" id="">
                    <?php
                        include 'link.php';
                        $sql = "select * from loai";
                        $kq = $conn -> query($sql);
                        foreach ($kq as $key => $row) {
                    ?>
                        <option value="<?php echo $row['ma_loai'] ?>"><?php echo $row['ten_loai'] ?></option>
                    <?php        
                        }
                    ?>
                </select>        
                <p>Tên sản phẩm:</p>
                <input type="text" name="tensp">
                <p>Giá:</p>
                <input type="text" name="price">
                <p>Hình ảnh:</p>
                <input type="file" name="img" style="border:none;">
                <p>Mô tả:</p>
                <textarea name="mota" id="" cols="30" rows="10"></textarea><br>
                <button type="submit" name="themmoi">Thêm mới</button>
                <button type="reset" >Nhập lại</button>
                <button><a href="index.php?act=listsp">Danh sách</a></button>
            </form>
        </section>   
        <?php
            include './link.php';
            if(isset($_POST['themmoi'])){
                $maloai = $_POST['maloai'];
                $tensp = $_POST['tensp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];

                $img = $_FILES['img']['name'];
                $tmp_sever = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp_sever,"./image/".$img);

                $sql = "insert into hanghoa values(null,'$tensp', $price, '$img', '$mota', $maloai,'')";
                $kq = $conn -> query($sql);
                var_dump($sql);
                if($kq -> execute()){
                    header('location: index.php?act=listsp');
                }else{
                    echo "add sản phẩm không thành công!!!";
                }
            }
        ?>
    </section>


