<?php
    include 'view/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="view/assets/css/cssdangkynhapquen.css">
  <title>Quên mật khẩu</title>
</head>
<body>
    <section>
        <div class="form-box1">
            <div class="form-value">
                <form action="index.php?act=quenmk" method="post">
                    <h2>Quên mật khẩu</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required name="email">
                        <label for="">Email</label>
                    </div>
                    <input class="btn-1" name="guiemail" type="submit" value="Lấy lại mật khẩu"></input>
                    <div class="register">
                        <p> Bạn chưa có tài khoản<a href="index.php?act=dangky">Đăng ký</a></p>
                    </div>
                    <div class="register">
                        <p> Quay trở lại <a href="index.php?act=dangnhap">Đăng Nhập </a></p>
                    </div>
                    <?php
                                if(isset($thongbao) && ($thongbao!="")) {
                                    echo $thongbao;
                                }
                            ?>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>