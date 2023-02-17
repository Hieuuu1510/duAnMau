<?php
    include '../link.php';
    $id = $_GET['id_khachhang'];
    $sql = "select * from khach_hang where id_khachhang = $id";
    $kq = $conn -> query($sql);
    foreach ($kq as $key => $row) 
?>
<form action="" method="POST" enctype="multipart/form-data">

    <p>User</p>
    <input type="text" name="user" value="<?php echo $row['user'] ?>">
    <p>Mật khẩu</p>
    <input type="text" name="matkhau" value="<?php echo $row['mat_khau'] ?>">
    <p>Họ tên</p>
    <input type="text" name="namee" value="<?php echo $row['ho_ten'] ?>">
    <p>email</p>
    <input type="text" name="email" value="<?php echo $row['email'] ?>">

  
    <button type="submit" name="bnt_ud">update</button>
</form>

<?php   
    include '../link.php';
    if(isset($_POST['bnt_ud'])){
        $user = $_POST['user'];
        $matkhau = $_POST['matkhau'];
        $namee = $_POST['namee'];
        $email = $_POST['email'];
        $sql = "update khach_hang set user = '$user', mat_khau = '$matkhau',ho_ten = '$namee', email = '$email' where id_khachhang = $id";
        $kq = $conn -> query($sql);
        if($kq -> execute()){
            header('location: ../index.php?act=listtk');
        }else{
            echo "khong update được tài khoản";
        }
    }

?>