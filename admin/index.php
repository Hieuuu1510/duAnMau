<?php
    include 'header.php';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                include 'danhmuc/add.php';
                break;
            case 'addsp':
                include 'sanpham/add.php';
                break;
            case 'listtk':
                include 'taikhoan/list.php';
                break;
            case 'listbl':
                include 'binhluan/list.php';
                break;
            case 'listThk':
                include 'thongke/list.php';
                break;
            case 'listdm':
                include 'danhmuc/list.php';
                break;
            case 'listsp':
                include 'sanpham/list.php';
                break;
            
            default:
                include 'content.php';
                break;
        }
        
    }else{
        include 'content.php';
    }


    // include 'content.php';
    include 'footer.php';
?>