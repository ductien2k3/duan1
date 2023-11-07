<?php
    if (isset($dm) && is_array($dm)) {
        extract($dm);
    } 
?>
<div class="tieude">
    <h2>Cập nhật danh mục</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=suadm"> 
    <input type="hidden" name="iddanhmuc" value="<?php if(isset($id) &&($id>0)) echo $id?>" >
	<label class="form-label">Tên Danh Mục</label>
    <input type="text" class="tendanhmuc" name="tendanhmuc" value="<?php if(isset($name) &&($name!="")) echo $name?>" >
    <input type="submit" class="dongy" value="Cập Nhật Danh Mục" name="capnhat">
    <input type="reset" class="nhaplai" value="Nhập Lại">
    <button class="ratranglist"><a href="index.php?act=danhmuc">Danh Sách</button>
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
    ?>
</form>
</div>

