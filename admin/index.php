
<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
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
            case 'listsp':
                $listdanhmuc = load_all_danhmuc();
                $listsanpham = load_all_sanpham();
                include "sanpham/list.php";
                break;
            
            case 'addsp':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $iddanhmuc = $_POST['iddanhmuc'];
                    $tensanpham = $_POST['tensanpham'];
                    $giasanpham = $_POST['giasanpham'];
                    $giamgia = $_POST['giamgia'];
                    $anhsanpham = $_FILES['anhsanpham']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['anhsanpham']['name']);
                    if (move_uploaded_file($_FILES['anhsanpham']["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["anhsanpham"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    $motasanpham = $_POST['motasanpham'];
                    $baohanhsanpham = $_POST['baohanhsanpham'];
                    $masanpham = $_POST['masanpham'];
                    $ngaydangsanpham = $_POST['ngaydangsanpham'];
                    $soluongsanpham = $_POST['soluongsanpham'];
                    insert_sanpham($tensanpham,$giasanpham,$giamgia,$anhsanpham,$motasanpham,$baohanhsanpham,$masanpham,$ngaydangsanpham,$soluongsanpham,$iddanhmuc);  
                }
                $listdanhmuc = load_all_danhmuc();
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
