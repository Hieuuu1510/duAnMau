
<style>
    img{
        width: 300px;
    }
</style>
<?php
    include '../link.php';
    $id = $_GET['id'];
    // $sql = "select * from hanghoa where id = $id";
    $sql = "SELECT a.ma_loai , ten_loai , b.id , ten_hh ,don_gia ,mo_ta ,hinh
    FROM loai a
    INNER JOIN hanghoa b ON a.ma_loai = b.ma_loai
    WHERE id = $id";
    $kq = $conn -> query($sql);
    foreach ($kq as $key => $row) 
?>
<form action="" method="POST" enctype="multipart/form-data">

    <p>Mã loại</p>
    <input type="text" name="maloai" value="<?php echo $row['ma_loai'] ?>">
    <p>Tên sản phẩm</p>
    <input type="text" name="ten_hh" value="<?php echo $row['ten_hh'] ?>">
    <p>Hình ảnh</p>
        <img src="<?php echo "../image/".$row['hinh'] ?>" alt="">
        <input type="file" name="img" >
    <p>Giá</p>
    <input type="text" name="price" value="<?php echo $row['don_gia'] ?>">
    <p>Mô tả</p>
    <input type="text" name="mota" value="<?php echo $row['mo_ta'] ?>">

  
    <button type="submit" name="bnt_ud">update</button>
</form>

<?php   
    include '../link.php';
    if(isset($_POST['bnt_ud'])){
        $maloai = $_POST['maloai'];
        $tenloai = $_POST['ten_hh'];
        $price = $_POST['price'];
        $mota = $_POST['mota'];

        $image = $_FILES['img']['name'];
        $tmp_sever = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_sever,"../image/".$image);

        // $mysql = "SELECT a.ma_loai, b.ten_hh, b.don_gia,b.hinh, b,mo_ta
        //           FROM loai a INNER JOIN hanghoa b ON a.ma_loai=b.ma_loai";
        $sql = "UPDATE loai, hanghoa
                SET 
                    loai.ma_loai = '$maloai';
                    hanghoa.ten_hh = '$tenloai';
                    hanghoa.hinh = '$image'; 
                    hanghoa.don_gia = '$price';
                    hanghoa.mo_ta = '$mota';
                FROM
                    loai, hanghoa
                where loai.ma_loai = hanghoa.ma_loai";
        $kq = $conn -> query($sql);
        // var_dump($kq);
        if($kq -> execute()){
            header('location: ../index.php?act=listsp');
        }else{
            echo "khong update duoc san pham";
        }
    }
?>
<!-- SELECT a.SOPN, b.TENKH , NGAYLAP
FROM PHIEUNHAP a INNER JOIN KHACHHANG b ON a.MAKH = b.MAKH
WHERE NGAYLAP LIKE '%2006%' -->
