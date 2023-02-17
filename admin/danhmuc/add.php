
    <section class="than">
        <section class="wrapper">
            <section class="text">
                <h1>THÊM MỚI LOẠI HÀNG HOÁ</h1>
            </section>
            <form action="" method="POST">
                <p>Mã loại:</p>
                <input type="text" name="mloai" id="mloai" readonly>
                <p>Tên loại:</p>
                <input type="text" name="tloai" id="tloai"><br><br>
                <button name="bnt_hh" type="submit">Thêm mới</button>
                <button type="reset" >Nhập lại</button>
                <button><a href="index.php?act=listdm">Danh sách</a></button>
            </form>
           
            <?php
                include 'link.php';
                if(isset($_POST['bnt_hh'])){
                    $maloai = $_POST['mloai'];
                    $tenloai = $_POST['tloai'];
                    
                    $sql = "insert into loai values (null, '$tenloai')";
                    $kq = $conn -> query($sql);
                    if($kq -> execute()){
                        header('location: index.php?act=listdm');
                    }else{
                        echo "Thêm sản phẩm thất bại!!!";
                    }
                }
            ?>
        </section>
    </section>
    <style>
        .text{
        width: 100%;
        height: 50px;
        background: rgb(123, 151, 192);
        }
        .text>h1{
            margin-left: 20px;
            padding: 16px;
            font-size: 20px;
        }
        form{
            margin-top: 20px;
        }
        form>p{
            margin-bottom: 5px;
            font-size: 17px;
        }
        form>input{
            margin-bottom: 10px;
            width: 100%;
            height: 30px;
            border: 1px solid rgb(236, 219, 219);
            border-radius: 7px;
        }
        button{
            width: 80px;
            height: 28px;
            background: white;
            border: 1px solid  rgb(236, 219, 219);
            border-radius: 5px;
        }
        button:hover{
            color: white;
            background: steelblue;
        }
        button>a{
            text-decoration: none;
            color: black;
        }
        button>a:hover{
            color: white;
            background: steelblue;
        }
    </style>
</body>
