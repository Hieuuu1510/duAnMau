
    <section class="than">
        <section class="wrapper">
           <section class="text">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
           </section>
           <table border="1">
                <tr style="background:rgb(179, 191, 245) ;">
                    <td></td>
                    <td>Tên đăng nhập</td>
                    <td>Mật khẩu</td>
                    <td>Họ tên</td>
                    <td>Email</td>
                    <td>Vai trò</td>
                    <td></td>
                </tr>
                <?php
                    include 'link.php';
                    $sql = "select * from khach_hang";
                    $kq = $conn -> query($sql);
                    foreach ($kq as $key => $row) {
                ?>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><?php echo $row['user'] ?></td>
                    <td><?php echo $row['mat_khau'] ?></td>
                    <td><?php echo $row['ho_ten'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['vai_tro'] ?></td>
                    <td>
                        <button>
                            <a href="taikhoan/update.php?id_khachhang=<?php echo $row['id_khachhang']?>">Sửa</a>
                        </button>&ensp;
                        <button>
                            <a onclick="return confirm('bạn có chắc muốn xoá không!!!')" href="taikhoan/remove.php?id_khachhang=<?php echo $row['id_khachhang']?>">Xoá</a>
                        </button>
                    </td>
                </tr>
                <?php        
                    }
                ?>
                
           </table>
        </section>    
    </section>