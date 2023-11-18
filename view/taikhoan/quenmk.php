<?php
    include 'view/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../../giaodien/formkynhapquen/cssdangkynhapquen.css">
  <title>Quên mật khẩu</title>
</head>
<body>
    <section>
        <div class="form-box1">
            <div class="form-value">
                <form action="">
                    <h2>Quên mật khẩu</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <button>Lấy lại mật khẩu</button>
                    <div class="register">
                        <p> Bạn chưa có tài khoản<a href="dangky.php">Đăng ký</a></p>
                    </div>
                    <div class="register">
                        <p> Quay trở lại <a href="dangnhap.php">Đăng Nhập </a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>