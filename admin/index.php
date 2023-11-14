
<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/chitietsanpham.php";
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
                        if (kiemtra_danhmuc($tendanhmuc)) {
                            $thongbao = " Danh Mục Đã Tồn Tại ";
                        } else if (!preg_match('/^[a-zA-Z0-9_ÀÁÂÃĐÈÉÊÌÍÒÓÔÕÙÚỦÝàáâãđèéêìíòóôõùúủý\s]+$/u', $tendanhmuc)) {
                            $thongbao = "Tên danh mục không được chứa ký tự đặc biệt";
                        } else if (strlen($tendanhmuc) < 2 || strlen($tendanhmuc) > 100) {
                            $thongbao = "Tên danh mục phải có độ dài từ 2 đến 100 ký tự";
                        }
                        else {
                        insert_danhmuc($tendanhmuc);
                        $thongbao = " Thêm Thành Công ";
                    }
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
                  
                    if (!preg_match('/^[a-zA-Z0-9_ÀÁÂÃĐÈÉÊÌÍÒÓÔÕÙÚỦÝàáâãđèéêìíòóôõùúủý\s]+$/u', $tendanhmuc)) {
                        $thongbao = "Tên danh mục không được chứa ký tự đặc biệt";
                    }
                    else if (kiemtra_danhmuc($tendanhmuc)) {
                            $thongbao = " Danh Mục Đã Tồn Tại ";
                    } else if (strlen($tendanhmuc) < 2 || strlen($tendanhmuc) > 100) {
                        $thongbao = "Tên danh mục phải có độ dài từ 2 đến 100 ký tự";
                    }
                    else {
                    update_danhmuc($iddanhmuc, $tendanhmuc);
                    $thongbao = " Cập Nhật Thành Công ";
                    }

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

               
                    if (kiemtra_sanpham($tensanpham,$iddanhmuc)) {
                        $thongbao = "Tên sản phẩm đã tồn tại";
                    }
                     else if (!preg_match('/^[a-zA-Z0-9_ÀÁÂÃĐÈÉÊÌÍÒÓÔÕÙÚỦÝàáâãđèéêìíòóôõùúủý\s]+$/u', $tensanpham)) {
                        $thongbao = "Tên sản phẩm không được chứa ký tự đặc biệt";
                    } else if (strlen($tensanpham) < 2 || strlen($tensanpham) > 100) {
                        $thongbao = "Tên sản phẩm phải có độ dài từ 2 đến 100 ký tự";
                    }
                    else {
                    insert_sanpham($tensanpham,$giasanpham,$giamgia,$anhsanpham,$motasanpham,$baohanhsanpham,$masanpham,$ngaydangsanpham,$soluongsanpham,$iddanhmuc);  
                    $thongbao = " Thêm Thành Công ";
                    }
                }
            
                $listdanhmuc = load_all_danhmuc();
                include "sanpham/add.php";
                break;
            
            case 'deletesp':  
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                
                $listsanpham = load_all_sanpham("",0);
                $listdanhmuc = load_all_danhmuc();
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

                    if (!preg_match('/^[a-zA-Z0-9_ÀÁÂÃĐÈÉÊÌÍÒÓÔÕÙÚỦÝàáâãđèéêìíòóôõùúủý\s]+$/u', $tensanpham)) {
                        $thongbao = "Tên sản phẩm không được chứa ký tự đặc biệt";
                    } else if (strlen($tensanpham) < 2 || strlen($tensanpham) > 100) {
                        $thongbao = "Tên sản phẩm phải có độ dài từ 2 đến 100 ký tự";
                    }
                    else {
                    update_sanpham($idsanpham,$tensanpham,$giasanpham,$giamgia,$anhsanpham,$motasanpham,$baohanhsanpham,$masanpham,$ngaydangsanpham,$soluongsanpham,$iddanhmuc);  
                    $thongbao = " Cập Nhật Thành Công ";
                }
            }
                $listdanhmuc = load_all_danhmuc();
                $listsanpham = load_all_sanpham("",0);
                include "sanpham/list.php";
                break;

                case 'chitietsp':
                    include "sanpham/chitietsanpham/list.php";
                    break;

                case 'addctsp':
                    if(isset($_POST['themmoi']) && $_POST['themmoi']){
                        $idsanpham = $_POST['idsanhpham'];
                        $color = $_POST['color'];
                        $size = $_POST['size'];
                        $soluong = $_POST['soluong'];
                        insert_chitietsanpham($idsanpham,$color,$size,$soluong);
                        $thongbao = " Thêm Thành Công ";
                    }
                    include "sanpham/chitietsanpham/add.php";
                    break;
                
                // tài khoản
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
        
                            // Kiểm tra tên đăng nhập đã tồn tại hay chưa
                            if(check_tendangki($tendangnhap)){
                                $thongbao = "Tên đăng nhập đã tồn tại";
                            }
        
                            // Kiểm tra số điện thoại đã tồn tại hay chưa
                            else if(check_sodienthoai($sodienthoai)){
                                $thongbao = "Số điện thoại đã tồn tại";
                            }
        
                            // Kiểm tra email đã tồn tại hay chưa
                            else if(check_email($email)){
                                $thongbao = "Email đã tồn tại";
                            }
        
                            // Kiểm tra tên đăng nhập chỉ chứa chữ cái, số, dấu gạch dưới, dấu cách và các ký tự tiếng Việt
                            else if (!preg_match('/^[a-zA-Z0-9-]+$/', $tendangnhap)) {
                                $thongbao = "Tên đăng nhập chứa ký tự đặc biệt";
                            }
        
                            // Kiểm tra tên đăng nhập có độ dài từ 2 đến 100 ký tự
                            else if (strlen($tendangnhap) < 2 || strlen($tendangnhap) > 100) {
                                $thongbao = "Tên đăng nhập phải có độ dài từ 2 đến 100 ký tự";
                            }
        
                            // Kiểm tra mật khẩu có độ dài từ 6 đến 128 ký tự
                            else if (strlen($matkhau) < 6 || strlen($matkhau) > 128) {
                                $thongbao = "Mật khẩu phải có độ dài từ 6 đến 128 ký tự";
                            }
        
                            // Kiểm tra email có định dạng hợp lệ
                            else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email)) {
                                $thongbao = "Email không hợp lệ";
                            }
                            // Kiểm tra số điện thoại có đúng định dạng hay không
                            else if (!preg_match("/^0[0-9]{9,11}$/", $sodienthoai)) {
                            $thongbao = "Số điện thoại không hợp lệ";
                            }
                                                        // Nếu tất cả các kiểm tra đều thành công thì thêm tài khoản vào cơ sở dữ liệu
                            else {
                                insert_taikhoan($tendangnhap,$matkhau,$email,$sodienthoai);
                                $thongbao = "Đăng kí thành công";
                            }
                        }
                        include "taikhoan/add.php";
                        break;
        

            case 'deletetk':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = load_all_taikhoan(0);
                include "taikhoan/list.php";
                break;
            
            case "updatetk":
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                    $tk = load_one_taikhoan($_GET['id']); 
                }
                    include "taikhoan/update.php";
                    break;
            case 'capnhattk':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $idtaikhoan = $_POST['idtaikhoan'];
                    $tendangnhap = $_POST['tendangnhap'];
                    $matkhau = $_POST['matkhau'];
                    $email = $_POST['email'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $diachi = $_POST['diachi'];
                    $vaitro = $_POST['vaitro'];
                    $avatar = $_FILES['avatar']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['avatar']['name']);
                    if (move_uploaded_file($_FILES['avatar']["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["anhsanpham"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    // Validate the form data
        

                    if (empty($_POST['tendangnhap'])) {
                        $thongbao = 'Tên đăng nhập không được để trống';
                    }

                    else if (empty($_POST['matkhau'])) {
                        $thongbao = 'Mật khẩu không được để trống';
                    }

                    else if (empty($_POST['email'])) {
                        $thongbao = 'Email không được để trống';
                    }

                    else if (empty($_POST['sodienthoai'])) {
                        $thongbao = 'Số điện thoại không được để trống';
                    }
                    else if (!preg_match('/^[a-zA-Z0-9-]+$/', $tendangnhap)) {
                        $thongbao = "Tên đăng nhập chứa ký tự đặc biệt";
                    }

                    // Kiểm tra tên đăng nhập có độ dài từ 2 đến 100 ký tự
                    else if (strlen($tendangnhap) < 2 || strlen($tendangnhap) > 100) {
                        $thongbao = "Tên đăng nhập phải có độ dài từ 2 đến 100 ký tự";
                    }

                    // Kiểm tra mật khẩu có độ dài từ 6 đến 128 ký tự
                    else if (strlen($matkhau) < 6 || strlen($matkhau) > 128) {
                        $thongbao = "Mật khẩu phải có độ dài từ 6 đến 128 ký tự";
                    }

                    // Kiểm tra email có định dạng hợp lệ
                    else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email)) {
                        $thongbao = "Email không hợp lệ";
                    }
                    // Kiểm tra số điện thoại có đúng định dạng hay không
                    else if (!preg_match("/^0[0-9]{9,11}$/", $sodienthoai)) {
                    $thongbao = "Số điện thoại không hợp lệ";
                    }

                     else {
                        // Update the database
                        update_taikhoan($idtaikhoan,$tendangnhap,$matkhau,$email,$sodienthoai,$diachi,$avatar,$vaitro);
                        $thongbao = 'Cập nhật thành công';
                    }
                }
                $listtaikhoan = load_all_taikhoan(0);
                include "taikhoan/update.php";
                break;

            //bình luận
            case 'dsbl':
                include 'binhluan/list.php';
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
