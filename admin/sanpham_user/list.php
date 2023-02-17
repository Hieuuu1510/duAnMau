<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css_user/ass.css">
    <style>
        img{
            width: 270px;
            height: 189px;
            margin-bottom: 15px;
        }
        .sanpham1{
            margin-bottom: 15px;
            height: 250px;
        }
        b{
            font-size: 18px;
            margin-bottom: 10px;
        }
        span{
            color:red;
            margin-top: 5px;
        }
        .sanpham{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin-bottom: 10px;
        }
        .danhmuc>.text1:hover{
            background: #bbb;
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
                    <li><a href="">Trang chủ</a></li>
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
                    
                    <!-- The dots/circles -->
                    <!-- <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div> -->
                </section>
                <section class="sanpham">
                    <?php
                        include '../link.php';
                        $sql = "select * from hanghoa";
                        $kq = $conn -> query($sql);
                        foreach ($kq as $key => $row) {
                    ?>
                        <section class="sanpham1">
                            <img src="<?php echo "../image/".$row['hinh'] ?>" alt=""><br>
                            <b><?php echo $row['ten_hh']  ?></b><br>
                            <span><?php echo $row['don_gia'] ?>đ</span> 
                        </section>
                    <?php        
                        }
                    ?>
                </section>
            </section>
            <section class="content">
                <section class="login">
                    <section class="text">
                        <h1>TÀI KHOẢN</h1>
                    </section>
                    <form action="" method="POST">
                        <p>Tên đăng nhập</p>
                        <input type="text" name="user" id="taikhoan">
                        <p>Mật khẩu</p>
                        <input type="text" name="pass" id="matkhau"><br>
                        <input type="checkbox" > <span>ghi nhớ tài khoản?</span><br>
                        <button name="bnt_dn"><a href="">Đăng nhập</a></button>

                        <ul>
                            <li><a href="">Quên mật khẩu</a></li>
                            <li><a href="../taikhoan/dangky.php">Đăng ký thành viên</a></li>
                        </ul>
                    </form>
                </section>
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
                            <button>Tìm kiếm</button>
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