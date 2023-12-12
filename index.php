<?php
    session_start();

    include "model/taikhoan.php";
    include 'model/pdo.php';
    include 'model/sanpham.php';
    include 'model/danhmuc.php';
    include 'model/dathang.php';
    include 'global.php';
    include 'model/donhang.php';
    include 'model/chitietsanpham.php';

    $dsdm = load_all_home();
    $spnew = load_all_sanpham_home();
    $dsbc = load_all_sanphambanchay_home();
    
    if(!isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = [];
    }
   

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
        // quên mật khẩu
        case 'quenmk':
            if(isset($_POST['guiemail']) && ($_POST['guiemail'])){
                $email = $_POST['email'];
                $checkemail = check_email($email);
            if(is_array($checkemail)){
                $thongbao = " mật khẩu của bạn là " .$checkemail['pass_word'];
            } else {
                $thongbao = " email này không tồn tại";
            }
        }
            include "view/taikhoan/quenmk.php";
            break;

        // thoát tài khoản
        case 'thoat':
            session_unset();
            header('location:index.php');
            break;
            
        // thông tin tài khoản
        case 'thongtin':
            if(isset($_SESSION['user'])){
                $id = $_SESSION['user']['id'];
                $dathang = load_dathang_chonguoidung($id); // Thay đổi tên biến để lưu trữ kết quả truy vấn
            }
            include "view/taikhoan/thongtin.php";
            break;

        case 'donhangnguoidung':
            if(isset($_GET['id_dathang']) && ($_GET['id_dathang']>0)){
                $id_dathang = $_GET['id_dathang'];
            }
            $ghnd = load_all_giohang_cho_nguoidung($id_dathang);
            include "view/giohang/donhangcuatoi.php";
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
                
                $listctsp = load_all_chitietsanpham($id);
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
        
        // giỏ hàng
        case 'addtocart':
            // lấy dữ liệu từ from vong view lên

            if(isset($_POST['addtocart']) && $_POST['addtocart']){
                
                $id = $_POST['id'];
                $name = $_POST['tensp'];
                $hinh = $_POST['hinh'];
                $giaban = $_POST['giaban'];
                
                if(isset($_POST['soluong']) && $_POST['soluong'] > 0){
                    $soluong = $_POST['soluong'];
                } else {
                $soluong =1;
                }
                if(isset($_POST['color']) && $_POST['color']){
                    $color = $_POST['color'];
                } else {
                $color = "Không có";
                }
                $fg =0;
                
                
                //  kiểm tra sản phẩm có tồn tại trong giỏ hàng hay không 
                // nếu có chỉ tăng sô lượng
                $i=0;
                foreach ($_SESSION['giohang'] as $item){
                    if($item[1] == $name){
                        $soluongmoi = $soluong + $item[4];
                        $_SESSION['giohang'][$i][4] = $soluongmoi;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }
                //còn lại thì add mới
                //khởi tạo mảng con trước khi đưa vào giỏ hàng
                if($fg ==0 ){
                $item = array($id,$name,$hinh,$giaban,$soluong,$color);
                $_SESSION['giohang'][] =($item);
                }
                header('location: index.php?act=viewcart');
            }
            //include "view/giohang/viewcart.php";
            break;

            case 'delcart':
                if (isset($_GET['i']) && ($_GET['i'] >= 0)) {
                    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                        $_SESSION['giohang'] = array_values(array_diff_key($_SESSION['giohang'], [$_GET['i'] => '']));
                    }
                } else {
                    if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                }
            
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                    header('location: index.php?act=viewcart');
                } else {
                    header('location: index.php');
                }
                break;
            
        // giỏ hàng
        case 'viewcart':

            include "view/giohang/viewcart.php";
            break;
        // cập nhật số lượng 
        case 'updatecart':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['soluong']) && $_POST['soluong'] > 0) {
                    $soluong = $_POST['soluong'];
                    $id = $_POST['id']; // Change 'product_id' to your actual product ID input field name
        
                    // Loop through all items in the cart
                    foreach ($_SESSION['giohang'] as $i => $item) {
                        if ($item[0] === $id) { // Check if item ID matches the provided ID
                            $_SESSION['giohang'][$i][4] = $soluong; // Update the quantity
                            break; // Exit the loop once the item is found and updated
                        }
                    }
                }
                header('location: index.php?act=viewcart');
                exit();
            }
            break;
        
        
        
        
        // mua
        case 'muahang':
                  
        include "view/giohang/muahang.php";
            break;

        //đặt hàng
        case 'dathang':
            if ((isset($_POST['dathang']) && $_POST['dathang'])){
                $tong = $_POST['tongdonhang'];
                $id_user = $_POST['id_user'];
                $status = $_POST['status'];
                $user_name = $_POST['name'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $pttt = $_POST['pttt'];
                $ngaydat = date('d-m-Y');

                $madh = "solo". rand(0,99999);
                //tạo đơn hàng
                //và trả về 1 đơn hàng
                $id_dathang = taodonhang($madh, $tong, $pttt,$id_user, $user_name, $address, $email, $tel,$status,$ngaydat);
                
                $_SESSION['id_dathang'] = $id_dathang;

                if(isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)){
                    foreach($_SESSION['giohang'] as $item){
                    addtocart($id_dathang,$item[0], $item[4], $item[3],$item[1],$item[5]);                  
                }
                    unset($_SESSION['giohang']);
                }      
            }        
            include "view/giohang/donhang.php";
            break;
        


        case 'gioithieu':
            include "view/gioithieu.php";
            break;

        // case 'huydon'
        case 'huydon':
            if (isset($_GET['act']) && $_GET['act'] === 'huydon' && isset($_GET['id'])) {
                $id = $_GET['id'];
                $huydon = $_POST['huydon'];  // Note: Make sure to sanitize this input in a real-world scenario
                huydon($id, $huydon);
                header("location: {$_SERVER['HTTP_REFERER']}");
                exit();
            }
            break;
            // nhận đơn
            case 'nhanhang':
                if (isset($_GET['act']) && $_GET['act'] === 'nhanhang' && isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $nhanhang = $_POST['nhanhang'];  // Note: Make sure to sanitize this input in a real-world scenario
                    hoanthanh($id,$nhanhang);
                    header("location: {$_SERVER['HTTP_REFERER']}");
                    exit();
                }
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