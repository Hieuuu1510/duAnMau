<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../css_user/dangky.css">
    <style>
        .text1>a>img{
            width: 100px;
        }
        .top>form>input{
            margin-top: 5px;
            margin-left: 15px;
            border-radius: 6px;
            border: 1px solid rgb(223, 215, 223);
            height: 18px;
            width: 200px;
        }
        .top>form>button{
            width: 60px;
            height: 20px;
            font-size: 11px;
            margin-left:15px;
            border-radius: 5px;
            border:1px solid

        }


        .yeuthich>.text1{
            /* border-bottom: 1px solid rgb(223, 215, 223); */
            padding: 5px;
            padding-left: 30px;
        }

        .yeuthich>.text1>a{
            text-decoration: none;
            color: black;
        }
        .yeuthich>.text1>a>img{
            width: 70px;
            margin-bottom: none;
            height: 70px;
        }
        .yeuthich>.text1>a{
            display: block;
        }
    </style>
</head>
<body>
<section class="wrapper">
        <header>
            <section class="logo">
                <h1>Cửa hàng trực tuyến</h1>
            </section>
            <nav>
                <ul>
                    <li><a href="index_user.php">Trang chủ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Liên hệ</a></li>
                    <li><a href="">Góp ý</a></li>
                    <li><a href="">Hỏi đáp</a></li>
                </ul>
            </nav>
        </header>
    </section>
    <section class="wrapper">
        <section class="than">
            <section class="noidung">
                <section class="banner">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="../imgs/img_mountains_wide.jpg" style="width:100%">
                        <!-- <div class="text">Caption Text</div> -->
                        </div>
                    
                        <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="../imgs/img_nature_wide.jpg" style="width:100%">
                        <!-- <div class="text">Caption Two</div> -->
                        </div>
                    
                        <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="../imgs/img_snow_wide.jpg" style="width:100%">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>
                    
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>
                </section>
                <section class="sanpham">
                    <section class="text">
                            <h1>Thông tin đăng ký</h1>
                    </section> 
                    <form action="" method="POST">
                        <p>Nhập User:</p>
                        <input type="text" name="user" id="taiKhoan">
                        <p>Nhập Password:</p>
                        <input type="password" name="pass" id="matKhau">
                        <p>Nhập họ tên:</p>
                        <input type="text" name="namee" id="tenn">
                        <p>Nhập email</p>
                        <input type="text" name="email" id="email"><br>
                        <button id="lg_dn" name="button" type="submit" onclick="kiemtra()">Đăng ký</button>
                    </form>

                    <?php
                        include '../link.php';
                        if(isset($_POST['button'])){
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $namee = $_POST['namee'];
                            $email = $_POST['email'];

                            $sql = "insert into khach_hang values(null,'$user','$pass','$namee','$email','','','')";
                            $kq = $conn->query($sql);
                            var_dump($conn);
                            if($kq -> execute()){
                                header('location: dangnhap.php');
                            }else{
                                echo "không đăng ký được đâu@@";
                            }
                        }
                    ?>
                </section>
            </section>
            <section class="content">
                <section class="danhmuc">
                    <section class="top">
                        <p>Danh mục</p>
                    </section>
                    <?php
                        include '../link.php';
                        $sql = "select * from loai order by ma_loai desc";
                        $kq = $conn -> query($sql);
                        foreach ($kq as $key => $row) {
                    ?>
                    <section class="text1"><a href=""><?php echo $row['ten_loai']  ?></a></section>
                    <?php        
                        }
                    ?>
                    <section class="top">
                        <form action="">
                            <input type="text">
                            <button type="submit">Tìm kiếm</button>
                        </form>
                    </section>
                </section>
                <section class="yeuthich">
                    <section class="top">
                        <p>Top 10 yêu thích</p>
                    </section>
                    <?php
                        include '../link.php';
                        $sql = "select * from hanghoa order by so_luot_xem desc";
                        $kq = $conn -> query($sql);
                        foreach ($kq as $key => $row) {
                    ?>
                    <section class="text1">
                        <a href="">
                            <img src="<?php echo "../image/".$row['hinh'] ?>" alt="">
                            <?php echo $row['ten_hh']?>
                        </a>
                    </section>
                    <?php        
                        }
                    ?>
                    
                </section>
            </section>
        </section>
    </section>
    <section class="wrapper">
        <footer class="">
            <!-- <img src="../imgs/logoHippe.png" alt=""> -->
            <section class="cocau">
                <h1>Cơ cấu tổ chức</h1>
                <ul>
                    <li>Người chịu trách nghiệm:<b> Trần Minh Hiếu - Giám đốc</b></li>
                    <li>Phàn nàn dịch vụ: 0862069563</li>
                    <li>Kinh doanh: 0862069563</li>
                    <li>Hỗ trợ kĩ thuật: 0862069563</li>
                </ul>
            </section>
            <section class="lienhe">
                <h1>Liên hệ</h1>
                <p>Số điện thoại: 0862069563</p>

            </section>
        </footer>
    </section>
    <script src="../js/dangky.js"></script>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
   