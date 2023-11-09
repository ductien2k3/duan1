
<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
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
                if(isset($_POST['listspok']) && ($_POST['listspok'])){
                    $kyw = $_POST['kyw'];
                    $iddanhmuc = $_POST['iddanhmuc'];
                } else {
                    $kyw = "";
                    $iddanhmuc = 0;
                }
                $listdanhmuc = load_all_danhmuc();
                $listsanpham = load_all_sanpham($kyw,$iddanhmuc);
                include "sanpham/list.php";
                if (count($listsanpham) > 0) {
                    // include "sanpham/list.php";
                } else {
                    echo "Không tìm thấy sản phẩm nào";
                } 
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
                    $thongbao = " Thêm Thành Công ";
                }
                $listdanhmuc = load_all_danhmuc();
                include "sanpham/add.php";
                break;
            
            case 'deletesp':  
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = load_all_sanpham("",0);
                include "sanpham/list.php";
                break;
            
            case 'updatesp':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $sp = load_one_sanpham($_GET['id']);
                }
                $listdanhmuc = load_all_danhmuc();
                include "sanpham/update.php";
                break;
            
            case 'capnhatsp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $idsanpham = $_POST['idsanpham'];
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
                    update_sanpham($idsanpham,$tensanpham,$giasanpham,$giamgia,$anhsanpham,$motasanpham,$baohanhsanpham,$masanpham,$ngaydangsanpham,$soluongsanpham,$iddanhmuc);  
                    $thongbao = " Cập Nhật Thành Công ";
                }
                $listdanhmuc = load_all_danhmuc();
                $listsanpham = load_all_sanpham("",0);
                include "sanpham/list.php";
                break;

                case 'dstk':
                    if(isset($_POST['listtkok']) && ($_POST['listtkok'])){
                        $kyw = $_POST['kyw'];        
                    } else {
                        $kyw = "";
                    }
                    $listtaikhoan = load_all_taikhoan($kyw);
                    include "taikhoan/list.php";
                    if (count($listtaikhoan) > 0) {
                       // include "taikhoan/list.php";
                    } else {
                        echo "Không tìm thấy tài khoản nào";
                    } 
                    break;
                
            
            
            case 'addtk':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){                 
                    $tendangnhap = $_POST['tendangnhap'];
                    $matkhau = $_POST['matkhau'];
                    $email = $_POST['email'];
                    $sodienthoai = $_POST['sodienthoai'];
                    insert_taikhoan($tendangnhap,$matkhau,$email,$sodienthoai);
                    $thongbao = "đã đăng kí thành công";
                }
                include "taikhoan/add.php";
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
