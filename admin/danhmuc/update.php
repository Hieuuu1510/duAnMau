<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/danhmuc.css">
    <!-- <style>
        .wrapper{
            width: 1200px;
            margin: 0 auto;
        }
        
    </style> -->
</head>
<body>
    <head>
        <section class="wrapper">
               <section class="logo">
                        <img src="" alt="">
                        <h2>ABC</h2>
                        <h1>quản trị website</h1>
                </section>
        </section>
        <section class="wrapper">
            <!-- <section class="login">
                <a href="taikhoan/dangnhap.php">Đăng nhập</a>
                |
                <a href="taikhoan/dangky.php">Đăng ký</a>
            </section> -->
        </section>

        <section class="wrapper">
            <nav>
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=adddm">Danh mục</a></li>
                    <li><a href="index.php?act=addsp">Hàng hoá</a></li>
                    <li><a href="index.php?act=listtk">Khách hàng</a></li>
                    <li><a href="index.php?act=listbl">Bình luận</a></li>
                    <li><a href="index.php?act=listThk">Thống kê</a></li>
                </ul>
            </nav>
        </section>
        <section class="banner">
            <section class="wrapper">
                 <img src="img/" alt="">
            </section>
        </section>
    </head>
    <section class="wrapper">
        <section class="than">
        <?php
            include '../link.php';
            $id = $_GET['ma_loai'];
            $sql = "select * from loai where ma_loai = $id";
            $kq = $conn -> query($sql);
            foreach ($kq as $key => $row) {
        ?>
            <form action="" method="POST">
                <p>Mã loại</p>
                <input type="text" value="<?php echo $row['ma_loai'] ?>" name="mloai">
                <p>Tên loại</p>
                <input type="text" value="<?php echo $row['ten_loai'] ?>" name="tloai">

                <button type="submit" name="bnt_ud">Update</button>
            </form>
        </section>
        <?php       
            }
        ?>

        <?php
            include '../link.php';
            if(isset($_POST['bnt_ud'])){
                $maloai = $_POST['mloai'];
                $tenloai = $_POST['tloai'];
                $sql = "update loai set ma_loai = $maloai , ten_loai = '$tenloai' where ma_loai = $id";
                $kq = $conn -> query($sql);
                if($kq -> execute()){
                    header('location: ../index.php?act=listdm');
                }else{
                    echo "Update không thành công~!!!";
                }
            }
        ?>
    </section>
</body>