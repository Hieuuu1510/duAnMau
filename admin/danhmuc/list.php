
    <section class="than">
        <section class="wrapper">
            <section class="text">
                <h1>Danh sách loại hàng</h1>
            </section>
            <form action="">
                <table border="1" cellspacing="0">
                    <tr style=" background: rgb(196, 180, 196); border: none;">
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>
                    <?php
                        include 'link.php';
                        $sql = "select * from loai";
                        $kq = $conn -> query($sql);
                        foreach ($kq as $key => $row) {
                    ?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><?php echo $row['ma_loai'] ?></td>
                            <td><?php echo $row['ten_loai'] ?></td>
                            <td>
                                <button><a href="danhmuc/update.php?ma_loai=<?php echo $row['ma_loai']?>">Sửa</a></button> 
                                <button><a onclick="return confirm('Bạn có chắc muốn xoá không???')" href="danhmuc/remove.php?ma_loai=<?php echo $row['ma_loai']?>">Xoá</a></button>
                            </td>
                        </tr>
                    <?php        
                        }
                    ?>
                </table>
                <button>Chọn tất cả</button>
                <button>Bỏ chọn tất cả</button>
                <button>Xoá các mục đã chọn</button>
                <button><a href="index.php?act=adddm">Nhập thêm</a></button>

            </form>
        </section>
    </section>
    <style>
            /* .text{
        width: 100%;
        height: 40px;
        background: rgb(211, 171, 195);
        }
        .text>h1{
        padding-top: 10px;
        margin-left: 25px;
        font-size:20px;
        }

        table{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        td{
            padding: 9px;
        }
        button{
            padding: 5px;
        } */

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