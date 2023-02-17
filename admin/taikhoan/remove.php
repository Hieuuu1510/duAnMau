<?php
    include '../link.php';
    $id = $_GET['id_khachhang'];
    $sql = "delete from khach_hang where id_khachhang = $id";
    $kq = $conn -> query($sql);
    if($kq -> execute()){
        header('location: ../index.php?act=listtk');
    }else{
        echo "Xoá không thành công!!!";
    }
?>