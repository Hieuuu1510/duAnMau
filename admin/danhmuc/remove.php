<?php
    include '../link.php';
    $id = $_GET['ma_loai'];
    $sql = "delete from loai where ma_loai = $id ";
    $kq = $conn -> query($sql);
    if($kq -> execute()){
        header('location: ../index.php?act=listdm');
    }else{
        echo "Xoá không thành công@@";
    }
?>