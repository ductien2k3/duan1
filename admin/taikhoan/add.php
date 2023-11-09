<div class="tieude">
    <h2>Thêm tài khoản</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=addtk">
	<label class="form-label">Tên đăng nhập</label>
    <input type="text" class="tendanhmuc" name="tendangnhap" required placeholder="nhập vào tên đăng nhập">
    <label class="form-label">Mật Khẩu</label>
    <input type="password" class="tendanhmuc" name="matkhau" required placeholder="nhập vào mật khẩu">
    <label class="form-label">Email</label>
    <input type="email" class="tendanhmuc" name="email" required placeholder="nhập vào email">
    <label class="form-label">số điện thoại</label>
    <input type="tel" class="tendanhmuc" name="sodienthoai" required placeholder="nhập vào số điện thoại">
    <input type="submit" class="dongy" value="Thêm tài khoản" name="themmoi">
    <input type="reset" class="nhaplai" value="Nhập Lại">
    <button class="ratranglist"><a href="index.php?act=dstk">Danh Sách</button>
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
    ?>
</div>    
</form>
</div>

