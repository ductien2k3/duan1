
<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    // controler

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {

            // phần danh mục
            case 'danhmuc':
                $listdanhmuc = load_all_danhmuc();
                include "danhmuc/list.php";
                break;

            case "adddm":
                //kiểm tra xem người dùng có click vào hay không
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tendanhmuc = $_POST['tendanhmuc'];
                    insert_danhmuc($tendanhmuc);
                    $thongbao = " Thêm Thành Công ";
                }
                include "danhmuc/add.php";
                break;
            
            case "deletedm":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = load_all_danhmuc();
                include "danhmuc/list.php";
                break;

            case "updatedm":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                $dm = load_one_danhmuc($_GET['id']); 
            }
                include "danhmuc/update.php";
                break;

            case 'suadm':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $iddanhmuc = $_POST['iddanhmuc'];
                    $tendanhmuc = $_POST['tendanhmuc'];
                    update_danhmuc($iddanhmuc, $tendanhmuc);
                    $thongbao = " Cập Nhật Thành Công ";
                }
                $listdanhmuc = load_all_danhmuc();
                include "danhmuc/update.php";
                break;

            // sản phẩm
            case 'sanpham':
                include "sanpham/list.php";
                break;
            
            case 'addsp':
                include "sanpham/add.php";
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
