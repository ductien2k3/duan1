<?php
    if(isset($tk) &&is_array($tk)){
        extract($tk);
    }
    $hinhpath = "../upload/".$avatar;
        if(is_file($hinhpath)){
            $avatar = "<img src='$hinhpath' width='50px'>";
    } else {
        $avatar = "no image";
    }
?>
<div class="tieude">
    <h2>Cập nhật tài khoản</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=capnhattk">
	<label class="form-label">Tên đăng nhập</label>
    <input type="text" class="tendanhmuc" name="tendangnhap" required placeholder="nhập vào tên đăng nhập" value="<?php if(isset($user_name) &&($user_name!="")) echo $user_name?>">
    <label class="form-label">Mật Khẩu</label>
    <input type="password" class="tendanhmuc" name="matkhau" required placeholder="nhập vào mật khẩu" value="<?php if(isset($pass_word) &&($pass_word!="")) echo $pass_word?>">
    <label class="form-label">Email</label>
    <input type="email" class="tendanhmuc" name="email" required placeholder="nhập vào email" value="<?php if(isset($email) &&($email!="")) echo $email?>">
    <label class="form-label">số điện thoại</label>
    <input type="tel" class="tendanhmuc" name="sodienthoai" required placeholder="nhập vào số điện thoại" value="<?php if(isset($tel) &&($tel!="")) echo $tel?>">
    <label class="form-label">Địa chỉ</label>
    <input type="text" class="tendanhmuc" name="diachi"  placeholder="nhập vào địa chỉ" value="<?php if(isset($address) &&($address!="")) echo $address?>">
    <label class="form-label">Avatar</label><?php if(isset($avatar) &&($avatar!="")) echo $avatar?>
    <input type="file" class="tendanhmuc" name="avatar"  placeholder="nhập vào avatar">
    <label class="form-label">vai trò</label>
    <input type="number" min="0" max="1" class="tendanhmuc" name="vaitro" placeholder="nhập vào vai trò" value="<?php if(isset($chuc_nang) &&($chuc_nang!="")) echo $chuc_nang?>">
    <input type="hidden" name="idtaikhoan" value="<?php if(isset($id) &&($id>0)) echo $id?>" >
    <input type="submit" class="dongy" value="Cập Nhật" name="capnhat">
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

