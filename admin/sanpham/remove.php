<?php
    include '../link.php';
    $id = $_GET['id'];
    $sql = "delete from hanghoa where id = $id";
    $kq = $conn -> query($sql);
    if($kq -> execute()){
        header('location:../index.php?act=listsp');
    }else{
        echo "Xoá không thành công!!!";
    }
?>

