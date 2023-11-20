<?php
    session_start();

    include "model/taikhoan.php";
    include 'model/pdo.php';
    include 'model/sanpham.php';
    include 'model/danhmuc.php';
    include 'global.php';

    $dsdm = load_all_home();
    $spnew = load_all_sanpham_home();
    $dsbc = load_all_sanphambanchay_home();
    


    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {

    case 'dangky':
        if (isset($_POST['dangky']) && $_POST['dangky']) {
            $tendangnhap = $_POST['tendangnhap'];
            $matkhau = $_POST['matkhau'];
            $email = $_POST['email'];
            $sodienthoai = $_POST['sodienthoai'];
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
                $thongbao = "Đăng kí thành công vui lòng đăng nhập";
            }
        }
        include "view/taikhoan/dangky.php";
        break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $tendangnhap = $_POST['tendangnhap'];
                $matkhau = $_POST['matkhau'];
                $checkuser = check_user($tendangnhap,$matkhau);
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    $thongbao = "bạn đã đăng nhập thành công";
                    header('location:index.php');
                }   else {
                    $thongbao = " tài khoản không tồn tại vui lòng kiểm tra hoặc đăng kí"; 
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        // cập nhật tài khoản
        case 'edit_taikhoan':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $user_name = $_POST['user_name'];
                    $pass_word = $_POST['pass_word'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $id = $_POST['id'];
      
                    capnhap_taikhoan_home($id,$user_name,$pass_word,$email,$tel,$address);              
                    $_SESSION['user'] = check_user($user_name,$pass_word);
                    header("Location:index.php?act=edit_taikhoan");
                    $thongbao = 'Cập nhật thành công';
                    }        
            include "view/taikhoan/edit_taikhoan.php";
            break;

        // thông tin tài khoản
        case 'thongtin':
            include "view/taikhoan/thongtin.php";
            break;

        case 'lienhe':
            include "view/lienhe.php";
            break;

        // load sản phẩm 
        case 'sanphamct':        
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                $id = $_GET['idsp'];
                $onesp = load_one_home($id);
                extract($onesp);
                $listdanhmuc = load_all_danhmuc();
                $spcungloai = load_sanpham_cungloai($id_danhmuc ,$id);
                
                include "view/chitietsanpham.php";
            } else {
                include "view/404.php";
            } 
            break;

            // load sản phẩm theo danh mục
            case 'sanpham':         
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                    $iddm = $_GET['iddm'];
                    $dssp = load_all_sanpham_theo_danhmuc("",$iddm);
                    $tendanhmuc = load_tendanhmuc($iddm);             
                    include "view/sanpham.php";
                } else {
                    include "view/404.php";
                }
                $dssp = load_all_sanpham_theo_danhmuc("",$iddm);
                $tendanhmuc = load_tendanhmuc($iddm);   
                break;

                //tìm kiếm
            case 'timkiem':
                if(isset($_POST['kyw']) && $_POST['kyw']!=""){
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                    $iddm = $_GET['iddm'];
                       
                } else {
                    $iddm = 0;
                }
                $dssp = load_all_sanpham_theo_danhmuc($kyw,$iddm);
                $tendanhmuc = load_tendanhmuc($iddm); 
                include "view/timkiem.php";
                break;

        
        case 'gioithieu':
            include "view/gioithieu.php";
            break;

    
        default:
            include "view/home.php";
            break;
        }
        }else {
        include "view/header.php";
        include "view/home.php";
        }
        include "view/footer.php";
?>