<?php
    if (isset($bl) && is_array($bl)) {
        extract($bl);
    } 
?>
<div class="tieude">
    <h2>Cập nhật nội dung bình luận</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=suabl"> 
    <input type="hidden" name="idbinhluan" value="<?php if(isset($id) &&($id>0)) echo $id?>" >
	<label class="form-label">Nội Dung Bình luận</label>
    <input type="text" class="tendanhmuc" name="noidung" value="<?php if(isset($noi_dung) &&($noi_dung!="")) echo $noi_dung?>" >
    <input type="submit" class="dongy" value="Cập Nhật Nội Dung" name="capnhat">
    <input type="reset" class="nhaplai" value="Nhập Lại">
    <button class="ratranglist"><a href="index.php?act=dsbl">Danh Sách</button>
    <?php
    
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
    ?>
</form>
</div>

