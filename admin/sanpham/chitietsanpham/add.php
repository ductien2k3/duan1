
<div class="tieude">
<h2>Thêm chi tiết sản phẩm</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=addctsp">
<div class="chondanhmuc">
<label class="form-label">Màu sản phẩm</label>
<input type="text" class="tendanhmuc" name="color" required placeholder="Nhập vào màu sắc">
<label class="form-label">Kích thước</label>
<input type="text" class="tendanhmuc" name="size" required placeholder="Nhập vào kích thước">
<label class="form-label">Số lượng</label>
<input type="number" min="0" class="tendanhmuc" name="soluong" required placeholder="Nhập vào số lượng">
<input type="hidden" name="id_sp" value="<?php echo $id_sp ?>">
<input type="submit" class="dongy" value="Thêm chi tiết sản phẩm" name="themmoi">
<input type="reset" class="nhaplai" value="Nhập lại">
<button class="ratranglist"><a href="index.php?act=chitietsp&id_sp=<?php echo $id_sp ?>">Quay lại trang chi tiết sản phẩm</a></button>

<?php
if (isset($thongbao) && ($thongbao != "")) {
echo $thongbao;
}
?>
</div>
</form>
</div>