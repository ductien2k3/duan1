<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../../giaodien/formkynhapquen/cssdangkynhapquen.css">
  <title>Đăng Nhập</title>
</head>
<body>
    <section>
        <div class="form-box1">
            <div class="form-value">
                <form action="">
                    <h2>Đăng Nhập</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">Tên Đăng Nhập</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Mật Khẩu</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Nhớ Mật Khẩu <a href="quenmk.php">Quên Mật Khẩu</a></label>
                    </div>
                    <button>Đăng Nhập</button>
                    <div class="register">
                        <p> Bạn chưa có tài khoản<a href="dangky.php">Đăng ký</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>