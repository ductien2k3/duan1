<?php
    include 'view/header.php';
    include 'model/taikhoan.php';
    include 'model/pdo.php';

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
                $thongbao = "Đăng kí thành công";
            }
        }

        include "view/taikhoan/dangky.php";
        break;
        
        case 'lienhe':
            include "view/lienhe.php";
            break;
    
        default:
            include "view/home.php";
            break;

    }
}else {
    include "view/home.php";
}
include "view/footer.php";
?>