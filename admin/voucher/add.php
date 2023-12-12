
<div class="tieude">
    <h2>Thêm Voucher</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=addvc"> 
	<label class="form-label">mã giảm giá</label>
    <input type="text" class="tendanhmuc" name="voucher" required placeholder="mã giảm giá">
    <label class="form-label">Khuyến mại</label>
    <input type="text" class="tendanhmuc" name="khuyenmai" required placeholder= " giảm giá">
    <input type="hidden" class="tendanhmuc" name="ngaybd">
    <input type="submit" class="dongy" value="Thêm Danh Mục" name="themmoi">
    <input type="reset" class="nhaplai" value="Nhập Lại">
    <button class="ratranglist"><a href="index.php?act=voucher">Mã Giảm Giá</button>
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
    ?>

</form>
</div>
