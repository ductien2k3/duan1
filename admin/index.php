
<?php
    include "header.php";
    include "../model/pdo.php";
    // controler

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {

            // phần danh mục
            case 'danhmuc':
                include "danhmuc/list.php";
                break;
            case "adddm":
                //kiểm tra xem người dùng có click vào hay không
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tendanhmuc = $_POST['tendanhmuc'];
                    $sql = "INSERT INTO `danh_muc`(`name`) VALUES ('$tendanhmuc')";
                    pdo_execute($sql);
                    $thongbao = " Thêm Thành Công ";
                }
                include "danhmuc/add.php";
                break;
            
            

            case 'sanpham':
                include "sanpham/list.php";
                break;

            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";

?>
