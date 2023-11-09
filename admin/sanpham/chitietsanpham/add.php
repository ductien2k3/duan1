<div class="tieude">
    <h2>Thêm chi tiết sản phẩm</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=addctsp">
    <div class="chondanhmuc">
	<label class="form-label">màu sản phẩm</label>
    <input type="text" class="tendanhmuc" name="color" required placeholder="nhập vào màu sắc">
    <label class="form-label">Kích Cỡ</label>
    <input type="text" class="tendanhmuc" name="size" required placeholder="nhập vào kích cỡ">
    <label class="form-label">Số Lượng</label>
    <input type="number" min="0" class="tendanhmuc" name="soluong" required placeholder="nhập vào số lượng">
    <input type="submit" class="dongy" value="Thêm Danh Mục" name="themmoi">
    <input type="reset" class="nhaplai" value="Nhập Lại">
    <button class="ratranglist"><a href="index.php?act=listsp">Quay Lại Trang Sản Phẩm</button>
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
    ?>
</div>    
</form>
</div>

